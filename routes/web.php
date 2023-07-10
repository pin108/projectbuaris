<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('pages.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/prof     ile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //galang dana
    Route::get('/galangdana', function () {
        return view('pages.galangdana.galangdana');
    });

    //galang dana lainnya
    Route::get('/galangdanalainnya', function () {
        return view('pages.galangdana.galangdanalainnya');
    })->name('galangdanalainnya');

    Route::get('/registergalangdanakaryakreatif', function () {
        return view('pages.galangdana.registergalangdanakaryakreatif');
    })->name('registergalangdanakaryakreatif');

    Route::get('/registergalangdanakegiatansosial', function () {
        return view('pages.galangdana.registergalangdanakegiatansosial');
    })->name('registergalangdanakegiatansosial');


    Route::get('/registergalangdanadifabel', function () {
        return view('pages.galangdana.registergalangdanadifabel');
    })->name('registergalangdanadifabel');

    Route::get('/registergalangdanapantiasuhan', function () {
        return view('pages.galangdana.registergalangdanapantiasuhan');
    })->name('registergalangdanapantiasuhan');

    Route::get('/registergalangdanarumahibadah', function () {
        return view('pages.galangdana.registergalangdanarumahibadah');
    })->name('registergalangdanarumahibadah');

    Route::get('/registergalangdanaorangsakit', function () {
        return view('pages.galangdana.registergalangdanaorangsakit');
    })->name('registergalangdanaorangsakit');

    Route::get('/registergalangdanabencanaalam', function () {
        return view('pages.galangdana.registergalangdanabencanaalam');
    })->name('registergalangdanabencanaalam');

    Route::get('/daftar', function () {
        return view('pages.signup');
    })->name('daftar');

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
    })->name('kirimdonasi');

    Route::get('/adminpengalang', function () {
        return view('pages.adminpengalang');
    });
    Route::get('/admindashboard', function () {
        return view('pages.admindashboard');
    });
    Route::get('/informasibeasiswa', function () {
        return view('pages.beasiswa.informasiprogram');
    });
    Route::get('/registerbeasiswa', function () {
        return view('pages.beasiswa.pendaftaran');
    });

    //profile
    Route::get('/profile', function () {
        return view('pages.profil.profile');
    })->name('profile');
});

require __DIR__ . '/auth.php';
