<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\GalangDana;

class GalangdanakaryakreatifController extends Controller
{

    public function notif()
    {
        return view('pages.message.index');
    }

    public function index()
    {
        $userId = Auth::user()->id;
        return view('pages.galangdana.registergalangdanakaryakreatif', compact('userId'));
    }
    //form controller register galang dana kreatif
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'kategori_galangdana' => 'required',
            'persetujuan_galangdana' => 'required',
            'nama' => 'required',
            'nomor_hp' => 'required',
            'pekerjaan' => 'required',
            'tempat_kerja' => 'required',
            'nama_kegiatan' => 'required',
            'tujuan_kegiatan' => 'required',
            'lokasi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'targetdonasi' => 'required',
            'batas_waktu' => 'required',
            'tanggal_mulai' => 'required',
            'rincian_galangdana' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/images');
            $image = str_replace('public/', '', $image);
        } else {
            return redirect()->route('index-registerkaryakreatif')->with('error', 'Please upload both images.');
        }

        //Rest of the code to create and save the data to the database
        $data =  new GalangDana([
            'id_user' => $request->input('id_user'),
            'kategori_galangdana' => $request->input('kategori_galangdana'),
            'persetujuan_galangdana' => $request->input('persetujuan_galangdana'),
            'nama' => $request->input('nama'),
            'nomor_hp' => $request->input('nomor_hp'),
            'pekerjaan' => $request->input('pekerjaan'),
            'tempat_kerja' => $request->input('tempat_kerja'),
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'tujuan_kegiatan' => $request->input('tujuan_kegiatan'),
            'lokasi' => $request->input('lokasi'),
            'gambar' => $image,
            'targetdonasi' => $request->input('targetdonasi'),
            'batas_waktu' => $request->input('batas_waktu'),
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'rincian_galangdana' => $request->input('rincian_galangdana'),
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // // Save the data to the database
        $data->save();
        return redirect()->route('registergalangdana-successkaryakreatif')->with('success', 'galang dana segera di proses.');
    }
}
