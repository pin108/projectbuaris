<?php

namespace App\Http\Controllers;

use App\Models\GalangDana;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProgressgalangdanaController extends Controller
{
    //
    public function notif($message)
    {
        return view('pages.message.index', compact('message'));
    }

    public function index()
    {
        $checkauth = Auth::user();
        $id_user = $checkauth->id;

        $pendaftarans = GalangDana::with('user', 'kategorigalangdana')
            ->where('id_user', $id_user)
            ->get();
        if ($pendaftarans->isEmpty()) {
            $message = "Anda belum mendaftar galangdana";
            return $this->notif($message);
        }

        return view('pages.galangdana.prosesgalangdana', compact('pendaftarans'));
    }
}
