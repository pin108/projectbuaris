<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategoribeasiswa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminkategoribeasiswaController extends Controller
{
    //
    public function index()
    {
        $modelskategoribeasiswas = Kategoribeasiswa::all();
        return view('pages.admin.kategoribeasiswa.index', compact('modelskategoribeasiswas'));
    }

    public function create()
    {
        return view('pages.admin.kategoribeasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_kategoribeasiswa' => 'required',
            'judul_kategoribeasiswa' => 'required',
            'banner_beasiswa' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_beasiswa' => 'required',
            'syarat_beasiswa' => 'required',
            'tanggal_pendaftaranawal' => 'required',
            'tanggal_pendaftaranakhir' => 'required',
            'tanggal_wawancara' => 'required',
            'tanggal_pengumuman' => 'required'
        ]);
        // Handle image upload
        if ($request->hasFile('banner_beasiswa')) {
            $image = $request->file('banner_beasiswa');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/kategoribeasiswa', $imageName); // Store in the storage directory
            $imagePath = 'storage/kategoribeasiswa/' . $imageName; // Path to store in the database
        }

        $data = Kategoribeasiswa::create([
            'jenis_kategoribeasiswa' => $request->input('jenis_kategoribeasiswa'),
            'judul_kategoribeasiswa' => $request->input('judul_kategoribeasiswa'),
            'banner_beasiswa' => $imagePath, // Save the image path in the database
            'deskripsi_beasiswa' => $request->input('deskripsi_beasiswa'),
            'syarat_beasiswa' => $request->input('syarat_beasiswa'),
            'tanggal_pendaftaranawal' => $request->input('tanggal_pendaftaranawal'),
            'tanggal_pendaftaranakhir' => $request->input('tanggal_pendaftaranakhir'),
            'tanggal_wawancara' => $request->input('tanggal_wawancara'),
            'tanggal_pengumuman' => $request->input('tanggal_pengumuman'),
        ]);
        return redirect()->route('kategoribeasiswas.index')->with('success', 'data telah ditambahkan');
    }

    public function update($id)
    {
        $data = Kategoribeasiswa::query();
        $result = $data->find($id);
        return view('pages.admin.kategoribeasiswa.update', compact('result'));
    }

    public function put(request $request, $id)
    {
        $request->validate([
            'jenis_kategoribeasiswa' => 'required',
            'judul_kategoribeasiswa' => 'required',
            'deskripsi_beasiswa' => 'required',
            'syarat_beasiswa' => 'required',
            'tanggal_pendaftaranawal' => 'required',
            'tanggal_pendaftaranakhir' => 'required',
            'tanggal_wawancara' => 'required',
            'tanggal_pengumuman' => 'required',
        ]);

        $kategoribeasiswa = Kategoribeasiswa::findOrFail($id);

        // Check if "Remove Image" checkbox is selected
        if ($request->has('remove_image')) {
            // Delete the existing image from storage
            Storage::delete($kategoribeasiswa->banner_beasiswa);

            // Remove the image path from the database
            $kategoribeasiswa->update(['banner_beasiswa' => null]);
        } elseif ($request->hasFile('banner_beasiswa')) {
            // Handle image upload
            $image = $request->file('banner_beasiswa');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/kategoribeasiswa', $imageName);
            $imagePath = 'storage/kategoribeasiswa/' . $imageName;

            // Update the image path in the database
            $kategoribeasiswa->update(['banner_beasiswa' => $imagePath]);
        }
        $kategoribeasiswa->update([
            'jenis_kategoribeasiswa' => $request->input('jenis_kategoribeasiswa'),
            'judul_kategoribeasiswa' => $request->input('judul_kategoribeasiswa'),
            'banner_beasiswa' => $imagePath, // Save the image path in the database
            'deskripsi_beasiswa' => $request->input('deskripsi_beasiswa'),
            'syarat_beasiswa' => $request->input('syarat_beasiswa'),
            'tanggal_pendaftaranawal' => $request->input('tanggal_pendaftaranawal'),
            'tanggal_pendaftaranakhir' => $request->input('tanggal_pendaftaranakhir'),
            'tanggal_wawancara' => $request->input('tanggal_wawancara'),
            'tanggal_pengumuman' => $request->input('tanggal_pengumuman'),
        ]);
        return redirect()->route('kategoribeasiswas.index')->with('success', 'data telah diperbarui');
    }

    public function destroy($id)
    {
        $destroy = Kategoribeasiswa::find($id);
        if (!$destroy) {
            return redirect()->route('kategoribeasiswas.index')->with('error', 'Data not found');
        }

        // Hapus gambar dari storage jika ada
        if (!empty($destroy->banner_beasiswa)) {
            Storage::delete('public/kategoribeasiswa/' . $destroy->banner_beasiswa);
        }

        $destroy->delete();
        return redirect()->route('kategoribeasiswas.index')->with('error', 'data berhasil dihapus');
    }
}
