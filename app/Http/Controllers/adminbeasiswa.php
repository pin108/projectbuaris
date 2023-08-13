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

        return redirect()->route('pages.admin.beasiswa')->with('success', 'Status pendaftaran beasiswa berhasil diperbarui.');
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

        return view('pages.admin.beasiswa_detail', compact('pendaftaranBeasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_depan' => 'required|string',
            'nama_belakang' => 'required|string',
            'email' => 'required|email',
            // ... tambahkan validasi field lainnya sesuai kebutuhan ...
        ]);

        $pendaftaranBeasiswa = pendaftaran_beasiswa::findOrFail($id);

        $pendaftaranBeasiswa->update($request->all());

        return redirect()->route('pages.admin.beasiswa')->with('success', 'Data pendaftaran beasiswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $pendaftaranBeasiswa = pendaftaran_beasiswa::findOrFail($id);

        $pendaftaranBeasiswa->delete();

        return redirect()->route('pages.admin.beasiswa')->with('success', 'Data pendaftaran beasiswa berhasil dihapus');
    }
}
