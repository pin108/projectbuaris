<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\GalangDana;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategorigalangdana;
use Illuminate\Support\Facades\Auth;

class GalangdanabantuanbencanaalamController extends Controller
{
    //
    public function notif($message)
    {
        return view('pages.message.index', compact('message'));
    }

    public function index()
    {
        $user = Auth::user();
        $userId = $user->id;
        // Assuming you want to get all records with "Jenis_kategori" equal to 'some_value'
        $kategoriRecords = Kategorigalangdana::where('jenis_kategori', 'bencana alam')->get();
        if ($user->ktp == null) {
            $message = "Mohon Lengkapi Data Anda Pada Menu Profile";
            return $this->notif($message);
            // return view('pages.message.index', compact('message'));
        } else {
            return view('pages.galangdana.registergalangdanabencanaalam', compact('userId', 'kategoriRecords'));
        }
    }
    //form controller register galang dana kreatif
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'id_kategoricampaign' => 'required',
            'judul_campaign' => 'required',
            'lokasi_campaign' => 'required',
            'tujuan_campaign' => 'required',
            'targetdonasi_campaign' => 'required',
            'rinciandana_campaign' => 'required',
            'deskripsi_campaign' => 'required',
            'foto_campaign' => 'required|image|mimes:jpeg,png,jpg,gif',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'praturan_campaign' => 'required',
        ]);
        if ($request->hasFile('foto_campaign')) {
            $image = $request->file('foto_campaign')->store('public/images');
            $image = str_replace('public/', '', $image);
        } else {
            return redirect()->route('index-registerkaryakreatif')->with('error', 'Please upload both images.');
        }

        //Rest of the code to create and save the data to the database
        $data =  new GalangDana([
            'id_user' => $request->input('id_user'),
            'id_kategoricampaign' => $request->input('id_kategoricampaign'),
            'judul_campaign' => $request->input('judul_campaign'),
            'lokasi_campaign' => $request->input('lokasi_campaign'),
            'tujuan_campaign' => $request->input('tujuan_campaign'),
            'targetdonasi_campaign' => $request->input('targetdonasi_campaign'),
            'rinciandana_campaign' => $request->input('rinciandana_campaign'),
            'deskripsi_campaign' => $request->input('deskripsi_campaign'),
            'foto_campaign' => $image,
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_akhir' =>  $request->input('tanggal_akhir'),
            'praturan_campaign' => $request->input('praturan_campaign'),
        ]);

        // // Save the data to the database
        $data->save();
        $message = "Proses Galang Dana Anda segera di proses";
        return $this->notif($message);
    }
}
