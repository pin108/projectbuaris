<?php

namespace App\Http\Controllers;

use App\Models\admingalangdana;
use Illuminate\Support\Facades\DB;

use App\Models\GalangDana;
use App\Models\Kategorigalangdana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class admin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.dashboard');
    }

        public function permintaan(){
            $data1 =  DB::table('programgalangdana')->get();
            $data2 =  DB::table('kategorigalangdanas')->get();

            // dd($data);
            return view('pages.admin.permintaan', ['data1' => $data1, 'data2' => $data2]);
        }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function storegalangdana(Request $request){
        $programGalangDana = new admingalangdana;
        $programGalangDana->id_user = '2308000001';
        $programGalangDana->id_kategoricampaign = $request->input('id_kategoricampaign');
        $programGalangDana->judul_campaign = $request->input('judul_campaign');
        $programGalangDana->lokasi_campaign = $request->input('lokasi_campaign');
        $programGalangDana->tujuan_campaign = $request->input('tujuan_campaign');
        $programGalangDana->targetdonasi_campaign = $request->input('targetdonasi_campaign');
        $programGalangDana->rinciandana_campaign = $request->input('rinciandana_campaign');
        $programGalangDana->deskripsi_campaign = $request->input('deskripsi_campaign');
        
        if ($request->hasFile('foto_campaign')) {
            $image = $request->file('foto_campaign')->store('public/images');
            $image = str_replace('public/', '', $image);
            $programGalangDana->foto_campaign = $image;
        } else {
            return redirect()->route('index-registerkaryakreatif')->with('error', 'Please upload an image.');
        }
        
        $programGalangDana->tanggal_mulai = $request->input('tanggal_mulai');
        $programGalangDana->tanggal_akhir = $request->input('tanggal_akhir');
        $programGalangDana->praturan_campaign = $request->input('praturan_campaign');
        $programGalangDana->save();
    
        return redirect('/adminis/permintaan')->with('success', 'Galang Dana berhasil ditambahkan');
    }
        public function updatestatus(Request $request, string $id)
    {
        $data = admingalangdana::find($id);
    if (!$data) {
        return redirect()->route('admin.permintaan')->with('error', 'Data not found');
    }

    $request->validate([
        'is_active' => 'required|integer',
    ]);

    $data->is_active = $request->is_active;
    $data->save();
    return redirect()->route('admin.permintaan')->with('success', 'Data berhasil diperbarui');
    }
    /**
     * Display the specified resource.
     */
    public function updategalangdana(Request $request, string $id)
    {
        $data = admingalangdana::find($id);
    
        if (!$data) {
            return redirect()->route('admin.permintaan')->with('error', 'Data not found');
        }
    
        $request->validate([
            'judul_campaign' => 'required|string|max:255',
            'lokasi_campaign' => 'required|string',
            'tujuan_campaign' => 'required|string',
            'targetdonasi_campaign' => 'required|numeric',
            'rinciandana_campaign' => 'required|string',
            'deskripsi_campaign' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_akhir' => 'required|date|after_or_equal:tanggal_mulai',
            'praturan_campaign' => 'required|string',
        ]);
    
        // Update data campaign dengan data yang diberikan oleh request
        $data->judul_campaign = $request->input('judul_campaign');
        $data->lokasi_campaign = $request->input('lokasi_campaign');
        $data->tujuan_campaign = $request->input('tujuan_campaign');
        $data->targetdonasi_campaign = $request->input('targetdonasi_campaign');
        $data->rinciandana_campaign = $request->input('rinciandana_campaign');
        $data->deskripsi_campaign = $request->input('deskripsi_campaign');
        $data->tanggal_mulai = $request->input('tanggal_mulai');
        $data->tanggal_akhir = $request->input('tanggal_akhir');
        $data->praturan_campaign = $request->input('praturan_campaign');
        // ... update field lainnya jika ada ...
    
        $data->save();
    
        return redirect()->route('admin.permintaan')->with('success', 'Data campaign berhasil diperbarui');
    }
     public function hapusgalangdana(string $id)
     {
         $programGalangDana = admingalangdana::find($id);
         if (!$programGalangDana) {
             return redirect()->route('admin.permintaan')->with('error', 'Data not found');
         }
     
         // Hapus gambar dari storage jika ada
         if (!empty($programGalangDana->foto_campaign)) {
             Storage::delete('public/images/' . $programGalangDana->foto_campaign);
         }
     
         $programGalangDana->delete();
     
         return redirect()->route('admin.permintaan')->with('success', 'Galang Dana berhasil dihapus');
     }
     
     public function show(string $id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
