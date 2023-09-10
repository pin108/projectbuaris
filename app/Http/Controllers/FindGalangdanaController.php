<?php

namespace App\Http\Controllers;

use App\Models\GalangDana;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FindGalangdanaController extends Controller
{
    //
    public function findlainnya()
    {
        return view('pages.galangdana.findlainnya');
    }
    public function notif($message)
    {
        return view('pages.message.index', compact('message'));
    }

    public function findbencanaalam()
    {
        $searchGalangDana = GalangDana::whereHas('kategorigalangdana', function ($query) {
            $query->where('jenis_kategori', 'bencana alam');
        })->where('is_active', 1)->get();

        if ($searchGalangDana->isEmpty()) {
            return $this->notif('Galang Dana Belum Ada.'); // Redirect to the notification view
        }

        return view('pages.galangdana.findgalangdana', compact('searchGalangDana'));
    }

    public function findorangsakit()
    {
        $searchGalangDana = GalangDana::whereHas('kategorigalangdana', function ($query) {
            $query->where('jenis_kategori', 'bantuan orang sakit');
        })->where('is_active', 1)->get();
        if ($searchGalangDana->isEmpty()) {
            return $this->notif('Galang Dana Belum Ada.'); // Redirect to the notification view
        }

        return view('pages.galangdana.findgalangdana', compact('searchGalangDana'));
    }

    public function finddifabel()
    {
        $searchGalangDana = GalangDana::whereHas('kategorigalangdana', function ($query) {
            $query->where('jenis_kategori', 'difabel');
        })->where('is_active', 1)->get();
        if ($searchGalangDana->isEmpty()) {
            return $this->notif('Galang Dana Belum Ada.'); // Redirect to the notification view
        }

        return view('pages.galangdana.findgalangdana', compact('searchGalangDana'));
    }

    public function findkaryakreatif()
    {
        $searchGalangDana = GalangDana::whereHas('kategorigalangdana', function ($query) {
            $query->where('jenis_kategori', 'karya kreatif dan modal usaha');
        })->where('is_active', 1)->get();
        if ($searchGalangDana->isEmpty()) {
            return $this->notif('Galang Dana Belum Ada.'); // Redirect to the notification view
        }

        return view('pages.galangdana.findgalangdana', compact('searchGalangDana'));
    }
    public function findkegiatansosial()
    {
        $searchGalangDana = GalangDana::whereHas('kategorigalangdana', function ($query) {
            $query->where('jenis_kategori', 'kegiatan sosial');
        })->where('is_active', 1)->get();
        if ($searchGalangDana->isEmpty()) {
            return $this->notif('Galang Dana Belum Ada.'); // Redirect to the notification view
        }

        return view('pages.galangdana.findgalangdana', compact('searchGalangDana'));
    }
    public function findpantiasuhan()
    {
        $searchGalangDana = GalangDana::whereHas('kategorigalangdana', function ($query) {
            $query->where('jenis_kategori', 'panti asuhan');
        })->where('is_active', 1)->get();
        if ($searchGalangDana->isEmpty()) {
            return $this->notif('Galang Dana Belum Ada.'); // Redirect to the notification view
        }

        return view('pages.galangdana.findgalangdana', compact('searchGalangDana'));
    }
    public function findrumahibadah()
    {
        $searchGalangDana = GalangDana::whereHas('kategorigalangdana', function ($query) {
            $query->where('jenis_kategori', 'rumah ibadah');
        })->where('is_active', 1)->get();
        if ($searchGalangDana->isEmpty()) {
            return $this->notif('Galang Dana Belum Ada.'); // Redirect to the notification view
        }

        return view('pages.galangdana.findgalangdana', compact('searchGalangDana'));
    }
}
