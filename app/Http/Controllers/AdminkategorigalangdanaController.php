<?php

namespace App\Http\Controllers;

use App\Models\Kategorigalangdana;
use Illuminate\Http\Request;

class AdminkategorigalangdanaController extends Controller
{
    //
    public function index()
    {
        $datagalangdana = Kategorigalangdana::all();
        return view('pages.admin.kategorigalangdana.index', compact('datagalangdana'));
    }

    public function create()
    {
        $jenisKategori = Kategorigalangdana::distinct('jenis_kategori')->pluck('jenis_kategori');
        return view('pages.admin.kategorigalangdana.create', compact('jenisKategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_kategori' => 'required',
            'nama_kategori' => 'required|max:244'
        ]);

        $data = Kategorigalangdana::create([
            'jenis_kategori' => $request->input('jenis_kategori'),
            'nama_kategori' => $request->input('nama_kategori')
        ]);

        return redirect()->route('kategorigalangdana.index')->with('success', 'Data telah ditambahkan');
    }

    public function edit($id)
    {
        $result = Kategorigalangdana::find($id);
        return view('pages.admin.kategorigalangdana.update', compact('result'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_kategori' => 'required',
            'nama_kategori' => 'required'
        ]);

        $kategoriupdate = Kategorigalangdana::findOrFail($id);
        $kategoriupdate->update([
            'jenis_kategori' => $request->input('jenis_kategori'),
            'nama_kategori' => $request->input('nama_kategori')
        ]);
        return redirect()->route('kategorigalangdana.index')->with('success', 'Data telah di perbarui');
    }

    public function destroy($id)
    {
        $datadelete = Kategorigalangdana::find($id);
        $datadelete->delete();
        return redirect()->route('kategorigalangdana.index')->with('success', 'data telah berhasil dihapus');
    }
}
