<?php

namespace App\Http\Controllers;

use App\Mail\beasiswastatus;
use App\Models\pendaftaran_beasiswa;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index($id) {
        // Dapatkan data pendaftaran beasiswa berdasarkan ID
        $pendaftaranBeasiswa = pendaftaran_beasiswa::find($id);
    
        // Pastikan data ditemukan
        if (!$pendaftaranBeasiswa) {
            return redirect()->route('admin.beasiswa')->with('error', 'Data Pendaftaran Beasiswa tidak ditemukan');
        }
    
        // Menyiapkan data yang akan dikirimkan ke dalam template email
        $details = [
            'title' => 'Pengumuman Status Beasiswa',
            'body' => 'Berikut adalah pengumuman status beasiswa Anda:',
            'nama' => $pendaftaranBeasiswa->nama_depan . ' ' . $pendaftaranBeasiswa->nama_belakang,
            'email' => $pendaftaranBeasiswa->email,
            'nomor_hp' => $pendaftaranBeasiswa->nomor_hp,
            'kelurahan' => $pendaftaranBeasiswa->kelurahan,
            'status' => $pendaftaranBeasiswa->is_active,
        ];
    
        // Kirim email
        Mail::to($details['email'])->send(new beasiswastatus($details));
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.beasiswa')->with('success', 'Email Telah Terkirim kepada ' . $details['email']);
    }
    
        
}
