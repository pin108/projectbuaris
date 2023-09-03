<?php

namespace App\Http\Controllers;

use App\Models\GalangDana;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\admingalangdana;
use App\Http\Controllers\Controller;
use App\Models\DoaDonasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class payment extends Controller
{
    public function notif($message)
    {
        return view('pages.message.index', compact('message'));
    }
    public function index()
    {
        $user = Auth::user();
        $payments = \App\Models\payment::where('user_id', $user->id)->with('galangdana')->get();


        // Cetak informasi pembayaran dan judul kampanye
        // dump($paymentInfo);
        return view('payments.index', compact('payments'));
    }
    public function create($galangdana_id)
    {
        $user = Auth::user();
        $galangDana = admingalangdana::findOrFail($galangdana_id);

        return view('payments.create', compact('user', 'galangDana'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_galangdana' => 'required',
                'jumlah_donasi' => 'required|numeric',
                'bukti_transaksi' => 'required|image|mimes:jpeg,png,jpg,gif'
            ]);

            $user = Auth::user();
            $galangDana = GalangDana::findOrFail($request->id_galangdana);

            // Upload bukti transaksi
            if ($request->hasFile('bukti_transaksi')) {
                $buktiTransaksiPath = $request->file('bukti_transaksi')->store('public/invoicepembayaran');
                $buktiTransaksiPath = str_replace('public/', '', $buktiTransaksiPath);
            } else {
                return redirect()->route('senddonasi', $galangDana->id)->with('error', 'Please upload an image.');
            }

            $invoiceCode = 'INV-' . date('Y-m-d') . Str::uuid()->toString();
            $total = str_replace(',', '', $request->jumlah_donasi);
            $total = floatval($total);
            $statusupdate = 1;
            \App\Models\payment::create([
                'user_id' => $user->id,
                'id_galangdana' => $galangDana->id,
                'total' => $total,
                'buktitransaksi' => $buktiTransaksiPath,
                'invoice_code' => $invoiceCode,
                'status' => $statusupdate
            ]);

            return redirect()->route('payments.index')->with('success', 'Payment successfully saved.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function updateBuktiTransaksi(Request $request, $id)
    {
        // Validate the uploaded file
        $request->validate([
            'buktitransaksi' => 'required|file|mimes:jpeg,png,pdf,jpg',
        ]);

        try {
            // Find the payment record by ID
            $payment = \App\Models\payment::findOrFail($id);

            if ($request->hasFile('buktitransaksi')) {
                // Delete the old bukti transaksi file if it exists
                if ($payment->buktitransaksi) {
                    Storage::delete($payment->buktitransaksi);
                }

                // Upload the new bukti transaksi file to storage
                $buktiTransaksiPath = $request->file('buktitransaksi')->store('public/invoicepembayaran');

                // Modify the path to make it relative to the 'public' directory
                $buktiTransaksiPath = str_replace('public/', '', $buktiTransaksiPath);

                // Update the payment record with the new file path and set the status
                $payment->buktitransaksi = $buktiTransaksiPath;
                $payment->status = 1; // Set status to 'Sudah Dikirim'
                $payment->save();

                // Redirect with a success message
                return redirect()->route('payments.index')->with('success', 'Bukti transaksi berhasil diunggah.');
            } else {
                // If no file is uploaded, redirect with an error message
                return redirect()->route('payments.index')->with('error', 'Tidak ada berkas yang diunggah.');
            }
        } catch (\Exception $e) {
            // Handle any exceptions and redirect with an error message
            return redirect()->route('payments.index')->with('error', 'Terjadi kesalahan saat mengunggah bukti transaksi: ' . $e->getMessage());
        }
    }

    public function showUploadBuktiTransaksi($id)
    {
        try {
            $payment = \App\Models\payment::findOrFail($id);

            // Pastikan pengguna hanya bisa mengunggah bukti transaksi untuk pembayarannya sendiri

            return view('payments.upload', compact('payment'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function detail($id)
    {
        $targetDate = now()->format('Y-m-d');
        $donasiDetail = GalangDana::with('user', 'kategorigalangdana')
            ->findOrFail($id);
        $modelsdoa = DoaDonasi::query();
        $query = $modelsdoa->where('id_galangdana', $id)->latest()
            ->take(5)
            ->get();
        $result = $query;
        $histori =  \App\Models\payment::query();
        $resulthistori = $histori->where('id_galangdana', $id)->whereDate('created_at', '=', $targetDate)->latest()
            ->take(5)
            ->get();;
        return view('pages.donasi.show', compact('donasiDetail', 'result', 'resulthistori'));
    }

    public function senddonasi($id)
    {
        $sendDonasi = GalangDana::with('user', 'kategorigalangdana')
            ->findOrFail($id);
        return view('pages.donasi.detaildonasi', compact('sendDonasi'));
    }

    public function storedoa(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'id_galangdana' => 'required',
                'nama' => 'nullable|string|max:25',
                'doa' => 'nullable|string|max:300'
            ]);

            $id = $request->input('id_galangdana');
            $sendDonasi = GalangDana::with('user', 'kategorigalangdana')
                ->findOrFail($id);

            $data = new DoaDonasi([
                'id_galangdana' => $request->input('id_galangdana'),
                'nama' => $request->input('nama'),
                'deskripsi_doa' => $request->input('doa')
            ]);
            $data->save();
            $successMessage = 'Terima kasih, semoga doa Anda bermanfaat bagi galang dana ini. Aamiin';
            return view('pages.donasi.detaildonasi', compact('sendDonasi'))->with('success', $successMessage);
        } else {
            $message = "periksa kembali kami tidak bisa menyimpan data";
            return $this->notif($message);
        }
    }
}
