<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Mpdf\Mpdf;
use App\Models\User;
use App\Models\payment;
use Illuminate\Http\Request;
use App\Models\admingalangdana;
use Illuminate\Support\Facades\DB;
use App\Models\pencairangalangdana;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class adminkeuangancontroller extends Controller
{
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|integer',
        ]);

        $payment = payment::find($id);
        if (!$payment) {
            return redirect()->route('admin.payment')->with('error', 'Pembayaran tidak ditemukan.');
        }

        // Simpan status pembayaran baru
        $newStatus = $request->status;
        $payment->status = $newStatus;
        $payment->save();

        // Jika status pembayaran diubah menjadi 2 (Pembayaran Disetujui)
        if ($newStatus ===  '2') {
            // Temukan kampanye atau program yang sesuai dengan pembayaran ini
            $galangdana = admingalangdana::find($payment->id_galangdana);

            // Pastikan program ditemukan
            if ($galangdana) {
                // Tambahkan jumlah saldo di program
                $galangdana->pendapatan_campaign += $payment->total;
                $galangdana->save();
            }
        }

        return redirect()->route('admin.payment')->with('success', 'Status pembayaran berhasil diperbarui.');
    }


    public function index()
    {
        $payment = payment::with('galangdana')->get();
        return view('pages.admin.payment', compact('payment'));
        //dd($payment);
    }

    public function show($id)
    {
        $payment = payment::findOrFail($id);
        return view('pages.admin.payment', compact('payment'));
    }

    // public function destroy($id)
    // {
    //     $payment = payment::findOrFail($id);

    //     $payment->delete();

    //     return redirect()->route('admin.payment')->with('success', 'Data pendaftaran beasiswa berhasil dihapus');    

    // }

    public function laporangalangdana()
    {
        $totals = Payment::select('payments.id_galangdana', DB::raw('SUM(payments.total) as total'))
            ->where('payments.status', 2)
            ->groupBy('payments.id_galangdana') // Group by user_id and id_galangdana
            ->with('galangdana', 'user') // Use 'galangdana' to eager load the relationship
            ->get();

        // dd($totals);
        return view('pages.admin.keuanganGdana.laporankeuangan', compact('totals'));
    }
    public function storepencairan(Request $request)
    {
        $data = $request->validate([
            'id_galangdana' => 'required',
            'id_penggalang' => 'required',
            'nama' => 'required',
            'judul_galangdana' => 'required',
            'jumlah' => 'required',
            'pencairanDana' => 'required|mimes:jpeg,png,jpg|max:5000',
            'penyerahanDana' => 'required|mimes:jpeg,png,jpg|max:5000'
        ]);
        if ($request->hasFile('pencairanDana')) {
            $pencairandana = $request->file('pencairanDana')->store('public/pencairandana');
            $pencairandana = str_replace('public/', '', $pencairandana);
        }
        if ($request->hasFile('penyerahanDana')) {
            $penyerahandana = $request->file('penyerahanDana')->store('public/pencairandana');
            $penyerahandana = str_replace('public/', '', $penyerahandana);
        }

        $store = new pencairangalangdana([
            'id_galangdana' => $request->input('id_galangdana'),
            'user_id' => $request->input('id_penggalang'),
            'nama_penggalangdana' => $request->input('nama'),
            'judul_galangdana' => $request->input('judul_galangdana'),
            'jumlah' => $request->input('jumlah'),
            'foto_pencairan' => $pencairandana,
            'foto_penyerahan' => $penyerahandana
        ]);
        $store->save();
        return redirect()->route('adminpayment.laporangalangdana')->with('success', 'dana telah di cairkan');
    }

    public function indexperncairandana()
    {
        $data = pencairangalangdana::all();
        return view('pages.admin.keuanganGdana.rekapgalangdana', compact('data'));
    }

    public function generatePDF(Request $request)
    {
        $id = $request->input('id');

        // Lakukan query ke database berdasarkan ID
        $result = pencairangalangdana::find($id);

        // Buat instance mpdf
        $mpdf = new Mpdf();

        // Konten HTML untuk PDF
        $html = view('pages.admin.keuanganGdana.generatepdf', compact('result'))->render();

        // Tambahkan konten ke PDF
        $mpdf->WriteHTML($html);

        // Tambahkan halaman baru
        $mpdf->AddPage();

        // Tambahkan konten gambar berkas ke halaman kedua PDF
        $fileImagePath = public_path('storage/' . $result->foto_pencairan);
        if (file_exists($fileImagePath)) {
            $mpdf->Image($fileImagePath, $x = 10, $y = 10, $w = 100, $h = 100);
        }

        $mpdf->AddPage();

        // Tambahkan konten gambar berkas ke halaman kedua PDF
        $fileImagePath = public_path('storage/' . $result->foto_penyerahan);
        if (file_exists($fileImagePath)) {
            $mpdf->Image($fileImagePath, $x = 10, $y = 10, $w = 100, $h = 100);
        }
        // Render PDF content
        $pdfContent = $mpdf->Output('', 'S');

        // Send the PDF content as a response
        return Response::make($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename=data_peserta.pdf',
        ]);
    }
}
