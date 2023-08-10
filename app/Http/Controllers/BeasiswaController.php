<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Kategoribeasiswa;
use App\Models\pendaftaran_beasiswa;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class BeasiswaController extends Controller
{
    //
    public function notif($message)
    {
        return view('pages.message.index', compact('message'));
    }
    public function index()
    {
        $data = Kategoribeasiswa::all();
        return view('pages.beasiswa.cardinformasibeasiswa', compact('data'));
    }

    public function register($id)
    {
        $client = new Client();
        $response = $client->get('http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json'); // Replace with the actual API URL
        $dataRegister = Kategoribeasiswa::find($id);
        $user = Auth::user();
        $userId = $user->id;
        $provinces = json_decode($response->getBody(), true);
        return view('pages.beasiswa.pendaftaran', compact('provinces', 'dataRegister', 'userId'));
    }

    public function store(Request $request)
    {
        //validasi request
        $request->validate([
            'id_peserta' => 'required',
            'id_kategoribeasiswa' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required',
            'nomor_hp' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'RT' => 'required',
            'RW' => 'required',
            'provinsi' => 'required',
            'nomor_identitas' => 'required',
            'ratarata_nilai' => 'required',
            'semester' => 'required',
            'kartu_identitas' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'kartu_keluarga' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'ktp_peserta' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'ktp_orangtuapeserta' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'foto_peserta' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'sertifikat_peserta' => 'nullable|mimes:pdf|max:5000'
        ]);
        if ($request->hasFile('kartu_identitas')) {
            $kartu_identitas = $request->file('kartu_identitas')->store('public/images');
            $kartu_identitas = str_replace('public/', '', $kartu_identitas);
        }
        if ($request->hasFile('kartu_keluarga')) {
            $kartu_keluarga = $request->file('kartu_keluarga')->store('public/images');
            $kartu_keluarga = str_replace('public/', '', $kartu_keluarga);
        }
        if ($request->hasFile('ktp_peserta')) {
            $ktp_peserta = $request->file('ktp_peserta')->store('public/images');
            $ktp_peserta = str_replace('public/', '', $ktp_peserta);
        }
        if ($request->hasFile('ktp_orangtuapeserta')) {
            $ktp_orangtuapeserta = $request->file('ktp_orangtuapeserta')->store('public/images');
            $ktp_orangtuapeserta = str_replace('public/', '', $ktp_orangtuapeserta);
        }
        if ($request->hasFile('foto_peserta')) {
            $foto_peserta = $request->file('foto_peserta')->store('public/images');
            $foto_peserta = str_replace('public/', '', $foto_peserta);
        }
        if ($request->hasFile('sertifikat_peserta')) {
            $sertifikat_peserta = $request->file('sertifikat_peserta')->store('public/pdf');
            $sertifikat_peserta = str_replace('public/', '', $sertifikat_peserta);
        }

        $data =  new pendaftaran_beasiswa([
            'id_peserta' => $request->input('id_peserta'),
            'id_kategoribeasiswa' => $request->input('id_kategoribeasiswa'),
            'nama_depan' => $request->input('nama_depan'),
            'nama_belakang' => $request->input('nama_belakang'),
            'email' => $request->input('email'),
            'nomor_hp' => $request->input('nomor_hp'),
            'kelurahan' => $request->input('kelurahan'),
            'kecamatan' => $request->input('kecamatan'),
            'kabupaten' => $request->input('kabupaten'),
            'RT' => $request->input('RT'),
            'RW' => $request->input('RW'),
            'provinsi' => $request->input('provinsi'),
            'nomor_identitas' => $request->input('nomor_identitas'),
            'ratarata_nilai' => $request->input('ratarata_nilai'),
            'semester' => $request->input('semester'),
            'kartu_identitas' => $kartu_identitas,
            'kartu_keluarga' => $kartu_keluarga,
            'ktp_peserta' => $ktp_peserta,
            'ktp_orangtuapeserta' => $ktp_orangtuapeserta,
            'foto_peserta' => $foto_peserta,
            'sertifikat_peserta' => $sertifikat_peserta
        ]);
        // dd($data);
        $data->save();
        $message = "Proses Beasiswa Diproses";
        return $this->notif($message);
    }
}
