<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\GalangDana;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategorigalangdana;
use Illuminate\Support\Facades\Auth;

class GalangdanakegiatansosialController extends Controller
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
        $kategoriRecords = Kategorigalangdana::where('jenis_kategori', 'kegiatan sosial')->get();
        if ($user->ktp == null) {
            $message = "Mohon Lengkapi Data Anda Pada Menu Profile";
            return $this->notif($message);
            // return view('pages.message.index', compact('message'));
        } else {
            return view('pages.galangdana.registergalangdanakegiatansosial', compact('userId', 'kategoriRecords'));
        }
    }
    //form controller register galang dana kreatif
    public function store(Request $request)
    {
        // Check if the request method is POST (form submission)
        if ($request->isMethod('post')) {
            // Validate the request
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
                'praturan_campaign' => 'required'
            ]);

            // Check if the record already exists in the database based on certain criteria (e.g., id_user)
            $existingRecord = GalangDana::where('id_user', $request->input('id_user'))
                ->where('id_kategoricampaign', $request->input('id_kategoricampaign'))
                ->first();

            if ($existingRecord) {
                // Handle duplicate entry scenario with an error message
                return redirect()->back()->with('error', 'Anda sudah membuat galang dana ini.');
            }


            // Upload and process the image
            if ($request->hasFile('foto_campaign')) {
                $image = $request->file('foto_campaign')->store('public/images');
                $image = str_replace('public/', '', $image);
            } else {
                return redirect()->route('index-registerkaryakreatif')->with('error', 'Please upload an image.');
            }

            // Create and save the data to the database
            $data = new GalangDana([
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
                'praturan_campaign' => $request->input('praturan_campaign')
            ]);
            $data->save();

            // Provide a success message and redirect
            $message = "Proses Galang Dana Anda segera di proses";
            return $this->notif($message);
        }

        // Redirect to the form view for GET requests (refresh)
        return $this->index();
    }
}
