<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalangdanakaryakreatifController;
use App\Http\Controllers\ProfilesettingController;

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

//galang dana
Route::get('/galangdana', function () {
    return view('pages.galangdana.galangdana');
});

//galang dana lainnya
Route::get('/galangdanalainnya', function () {
    return view('pages.galangdana.galangdanalainnya');
})->name('galangdanalainnya');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/registergalangdanakaryakreatif', function () {
    //     return view('pages.galangdana.registergalangdanakaryakreatif');
    // })->name('registergalangdanakaryakreatif');

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

    // profile setting
    Route::get('/profile', [ProfilesettingController::class, 'index'])->name('profile');
    Route::get('/profile/{id}/edit', [ProfilesettingController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update/{id}', [ProfilesettingController::class, 'update'])->name('items.update');



    //galang dana karya kreatif
    Route::get('/registergalangdana-successkaryakreatif', [GalangdanakaryakreatifController::class, 'notif'])->name('registergalangdana-successkaryakreatif');
    Route::get('/index-registerkaryakreatif', [GalangdanakaryakreatifController::class, 'index'])->name('index-registerkaryakreatif');
    Route::post('/process-form-registerkaryakreatif', [GalangdanakaryakreatifController::class, 'store'])->name('process-form-registerkaryakreatif');
});

require __DIR__ . '/auth.php';
