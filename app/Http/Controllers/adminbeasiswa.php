<?php

namespace App\Http\Controllers;

use App\Models\Kategoribeasiswa;
use App\Models\PendaftaranBeasiswa;
use App\Models\pendaftaran_beasiswa;
use Illuminate\Http\Request;

class adminbeasiswa extends Controller
{
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'is_active' => 'required|integer',
        ]);

        $pendaftaranBeasiswa = pendaftaran_beasiswa::find($id);
        if (!$pendaftaranBeasiswa) {
            return redirect()->route('pages.admin.beasiswa')->with('error', 'Data pendaftaran beasiswa tidak ditemukan.');
        }

        $pendaftaranBeasiswa->is_active = $request->is_active;
        $pendaftaranBeasiswa->save();

        return redirect()->route('admin.beasiswa')->with('success', 'Status pendaftaran beasiswa berhasil diperbarui.');
    }

    public function index()
    {
        $kategoriBeasiswa = Kategoribeasiswa::all();
        $pendaftaranBeasiswa = pendaftaran_beasiswa::all();

        return view('pages.admin.beasiswa', compact('kategoriBeasiswa', 'pendaftaranBeasiswa'));
    }

    public function show($id)
    {
        $pendaftaranBeasiswa = pendaftaran_beasiswa::findOrFail($id);

        return view('pages.admin.beasiswa', compact('pendaftaranBeasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_depan' => 'required|string',
            'nama_belakang' => 'required|string',
            'email' => 'required|email',
            'nomor_hp' => 'required|string',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'RT' => 'required|string',
            'RW' => 'required|string',
            'provinsi' => 'required|string',
            'nomor_identitas' => 'required|string',
            'ratarata_nilai' => 'required|string',
            'semester' => 'required|string',
            // Add validation rules for other fields as needed
        ]);

        $pendaftaranBeasiswa = pendaftaran_beasiswa::findOrFail($id);

        $pendaftaranBeasiswa->update($request->all());

        return redirect()->route('admin.beasiswa')->with('success', 'Data pendaftaran beasiswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pendaftaranBeasiswa = pendaftaran_beasiswa::findOrFail($id);

        $pendaftaranBeasiswa->delete();

        return redirect()->route('admin.beasiswa')->with('success', 'Data pendaftaran beasiswa berhasil dihapus');
    }
}
