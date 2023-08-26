<?php

namespace App\Http\Controllers;

use App\Models\GalangDana;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FindGalangdanaController extends Controller
{
    //
    public function notif($message)
    {
        return view('pages.message.index', compact('message'));
    }

    public function findbencanaalam()
    {
        $searchGalangDana = GalangDana::whereHas('kategorigalangdana', function ($query) {
            $query->where('jenis_kategori', 'bencana alam');
        })->get();

        if ($searchGalangDana->isEmpty()) {
            return $this->notif('Galang Dana Belum Ada.'); // Redirect to the notification view
        }

        return view('pages.galangdana.findgalangdana', compact('searchGalangDana'));
    }

    public function findorangsakit()
    {
        $searchGalangDana = GalangDana::whereHas('kategorigalangdana', function ($query) {
            $query->where('jenis_kategori', 'bantuan orang sakit');
        })->get();
        if ($searchGalangDana->isEmpty()) {
            return $this->notif('Galang Dana Belum Ada.'); // Redirect to the notification view
        }

        return view('pages.galangdana.findgalangdana', compact('searchGalangDana'));
    }

    public function finddifabel()
    {
        $searchGalangDana = GalangDana::whereHas('kategorigalangdana', function ($query) {
            $query->where('jenis_kategori', 'difabel');
        })->get();
        if ($searchGalangDana->isEmpty()) {
            return $this->notif('Galang Dana Belum Ada.'); // Redirect to the notification view
        }

        return view('pages.galangdana.findgalangdana', compact('searchGalangDana'));
    }
}
