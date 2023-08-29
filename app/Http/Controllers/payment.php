<?php

namespace App\Http\Controllers;

use App\Models\admingalangdana;
use App\Models\GalangDana;
use App\Models\payment as ModelsPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class payment extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $payments = \App\Models\payment::where('user_id', $user->id)->get();

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
                'id_galangdana' => 'required|exists:programgalangdana,id',
                'total' => 'required|numeric',
            ]);
    
            $user = Auth::user();
            $galangDana = admingalangdana::findOrFail($request->id_galangdana);
    
            // Generate kode invoice (misalnya: INV-yyyy-mm-dd-123)
            $invoiceCode = 'INV-' . date('Y-m-d') . '-' . ModelsPayment::count();
            $total = str_replace(',', '', $request->total); // Hilangkan tanda koma jika ada
            $total = floatval($total);
    
            \App\Models\payment::create([
                'user_id' => $user->id,
                'id_galangdana' => $galangDana->id,
                'total' => $total,
                'invoice_code' => $invoiceCode,
            ]);
    
            return redirect()->route('payments.index')->with('success', 'Pembayaran berhasil disimpan.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function updateBuktiTransaksi(Request $request, $id)
    {
        $request->validate([
            'buktitransaksi' => 'required|file|mimes:jpeg,png,pdf,jpg',
        ]);
    
        try {
            $payment = \App\Models\Payment::findOrFail($id);
    
            if ($request->hasFile('buktitransaksi')) {
                // Menghapus bukti transaksi lama jika ada
                if ($payment->buktitransaksi) {
                    Storage::delete($payment->buktitransaksi);
                }
    
                // Upload bukti transaksi baru
                $buktiTransaksiPath = $request->file('buktitransaksi')->store('bukti_transaksi');
                $payment->buktitransaksi = $buktiTransaksiPath;
                $payment->status = 1; // Mengubah status menjadi 'Sudah Dikirim'
                $payment->save();
    
                return redirect()->route('payments.index')->with('success', 'Bukti transaksi berhasil diunggah.');
            } else {
                return redirect()->route('payments.index')->with('error', 'Tidak ada berkas yang diunggah.');
            }
        } catch (\Exception $e) {
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
}
