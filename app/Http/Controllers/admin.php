<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\GalangDana;
use App\Models\Kategorigalangdana;
use Illuminate\Http\Request;

class admin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.dashboard');
    }

        public function permintaan(){
            $data =  DB::table('programgalangdana')->get();
            // dd($data);
            return view('pages.admin.permintaan', ['data' => $data]);
        }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
