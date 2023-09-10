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
        // Calculate the number of days to add to the current date
        $daysToAdd = rand(1, 30); // You can adjust the range as needed

        // Calculate the end date by adding the random number of days to the current date
        $endDate = now()->addDays($daysToAdd)->toDateString();

        $galangDanasToUpdate = GalangDana::whereDate('tanggal_akhir', '=', $endDate)
            ->where('is_active', 1)
            ->get();

        foreach ($galangDanasToUpdate as $galangDana) {
            $galangDana->update(['is_active' => 0]);
        }

        // Optionally, you can retrieve the remaining active GalangDana records after updating.
        $currentDate = now()->toDateString(); // Get the current date in 'YYYY-MM-DD' format

        $activeGalangDanas = GalangDana::with('user', 'kategorigalangdana')
            ->where('is_active', 1)
            ->whereDate('tanggal_akhir', '>', $currentDate) // Exclude records with tanggal_akhir greater than the current date
            ->latest()
            ->take(5)
            ->get();

        return view('pages.home', compact('activeGalangDanas'));
    }
}
