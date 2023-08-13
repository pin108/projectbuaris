<?php

namespace App\Http\Controllers;

use App\Models\admingalangdana;
use Illuminate\Support\Facades\DB;

use App\Models\GalangDana;
use App\Models\Kategorigalangdana;
use Illuminate\Http\Request;

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
            $data =  DB::table('programgalangdana')->get();
            // dd($data);
            return view('pages.admin.permintaan', ['data' => $data]);
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
        $programGalangDana->id_user = $request->input('id_user');
        $programGalangDana->id_kategoricampaign = $request->input('id_kategoricampaign');
        $programGalangDana->judul_campaign = $request->input('judul_campaign');
        $programGalangDana->lokasi_campaign = $request->input('lokasi_campaign');
        $programGalangDana->tujuan_campaign = $request->input('tujuan_campaign');
        $programGalangDana->targetdonasi_campaign = $request->input('targetdonasi_campaign');
        $programGalangDana->rinciandana_campaign = $request->input('rinciandana_campaign');
        $programGalangDana->deskripsi_campaign = $request->input('deskripsi_campaign');
        $programGalangDana->foto_campaign = $request->input('foto_campaign');
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
