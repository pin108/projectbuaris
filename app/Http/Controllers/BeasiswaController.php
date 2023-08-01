<?php

namespace App\Http\Controllers;

use App\Models\Kategoribeasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    //
    public function index()
    {
        $data = Kategoribeasiswa::all();
        return view('pages.beasiswa.cardinformasibeasiswa', compact('data'));
    }
}
