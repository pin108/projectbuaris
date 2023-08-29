<?php

namespace App\Http\Controllers;

use App\Models\GalangDana;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function main()
    {
        $activeGalangDanas = GalangDana::with('user', 'kategorigalangdana')
            ->where('is_active', 1)
            ->latest()
            ->take(5)
            ->get();

        return view('pages.home', compact('activeGalangDanas'));
    }
}
