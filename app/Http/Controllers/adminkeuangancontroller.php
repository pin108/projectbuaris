<?php

namespace App\Http\Controllers;

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
            return redirect()->route('admin.payment')->with('error', 'pembayaran tidak ditemukan.');
        }

        $payment->status = $request->status;
        $payment->save();

        return redirect()->route('admin.payment')->with('success', 'Status payment berhasil diperbarui.');
    }

    public function index()
    {
        $payment = payment::with('galangdana')->get();
        return view('pages.admin.payment', compact('payment'));
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
