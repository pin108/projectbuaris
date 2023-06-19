<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

//galang dana
Route::get('/galangdana', function () {
    return view('pages.galangdana.galangdana');
});

//galang dana lainnya
Route::get('/galangdanalainnya', function () {
    return view('pages.galangdana.galangdanalainnya');
});

Route::get('/daftar', function () {
    return view('pages.signup');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/detail', function () {
    return view('pages.show');
});

Route::get('/showpengalangdana', function () {
    return view('pages.showpengalangdana');
});

Route::get('/kirimdonasi', function () {
    return view('pages.detaildonasi');
});
Route::get('/adminpengalang', function () {
    return view('pages.adminpengalang');
});
Route::get('/admindashboard', function () {
    return view('pages.admindashboard');
});
Route::get('/informasibeasiswa', function () {
    return view('pages.beasiswa.informasiprogram');
});
