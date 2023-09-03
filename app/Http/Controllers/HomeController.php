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
        // $activeGalangDanas = GalangDana::with('user', 'kategorigalangdana')
        //     ->where('is_active', 1)
        //     ->latest()
        //     ->take(5)
        //     ->get();
        $currentDate = now()->toDateString(); // Get the current date in 'YYYY-MM-DD' format

        $galangDanasToDelete = GalangDana::whereDate('tanggal_akhir', '=', $currentDate)
            ->where('is_active', 1)
            ->get();

        foreach ($galangDanasToDelete as $galangDana) {
            $galangDana->delete();
        }

        // Optionally, you can retrieve the remaining active GalangDana records after deletion.
        $activeGalangDanas = GalangDana::with('user', 'kategorigalangdana')
            ->where('is_active', 1)
            ->whereDate('tanggal_akhir', '>', $currentDate) // Exclude records with tanggal_akhir greater than the current date
            ->latest()
            ->take(5)
            ->get();

        return view('pages.home', compact('activeGalangDanas'));
    }
}
