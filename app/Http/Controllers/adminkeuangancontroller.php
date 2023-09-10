<?php

namespace App\Http\Controllers;

use App\Models\admingalangdana;
use App\Models\payment;
use Illuminate\Http\Request;
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
}
