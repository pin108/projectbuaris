<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\adminbeasiswa;
use App\Http\Controllers\BeasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilesettingController;
use App\Http\Controllers\GalangdanadifabelController;
use App\Http\Controllers\GalangdanakaryakreatifController;
use App\Http\Controllers\GalangdanakegiatansosialController;
use App\Http\Controllers\GalangdanabantuanbencanaalamController;
use App\Http\Controllers\GalangdanakegiatanpantiasuhanController;
use App\Http\Controllers\GalangdanakegiatanrumahibadahController;
use App\Http\Controllers\GalangdanakegiatanbantuanorangsakitController;

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

Route::get('/admindashboardss', function () {
    return view('pages.admindashboardsss');
})->middleware('admin')->name('admindashboard');

Route::middleware('admin')->group(function () {

    Route::get('/adminis', function () {
        return view('pages.admin.dashboard');
    });
    Route::get('/adminis/permintaan', [admin::class, 'permintaan'])->name('admin.permintaan');
    // updatestatus
    Route::post('/adminis/permintaan/updatestatus/{id}', [admin::class, 'updatestatus'])->name('updatestatus');
    Route::post('/adminis/permintaan/tambah', [admin::class, 'storegalangdana'])->name('tambahgalangdana');
    Route::post('/adminis/permintaan/tambah', [admin::class, 'storegalangdana'])->name('admin.edit');
    Route::post('/adminis/permintaan/update/{id}', [admin::class, 'updategalangdana'])->name('admin.update');

    Route::delete('/adminis/permintaan/delete/{id}', [admin::class, 'hapusgalangdana'])->name('admin.destroy');
    Route::get('/adminis/beasiswa', [adminbeasiswa::class, 'index'])->name('admin.beasiswa');

    // Menampilkan halaman detail pendaftaran beasiswa
    Route::get('/adminis/beasiswa/{id}', [adminbeasiswa::class, 'show'])->name('admin.beasiswa.detail');

    // Menampilkan halaman tambah pendaftaran beasiswa
    Route::get('/adminis/beasiswa/tambah', [adminbeasiswa::class, 'create'])->name('admin.beasiswa.tambah');

    // Menyimpan data pendaftaran beasiswa yang baru
    Route::post('/adminis/beasiswa/tambah', [adminbeasiswa::class, 'store'])->name('admin.beasiswa.simpan');

    // Menampilkan halaman edit pendaftaran beasiswa
    Route::get('/adminis/beasiswa/edit/{id}', [adminbeasiswa::class, 'edit'])->name('admin.beasiswa.edit');

    // Mengupdate data pendaftaran beasiswa yang ada
    Route::put('/adminis/beasiswa/edit/{id}', [adminbeasiswa::class, 'update'])->name('admin.beasiswa.update');

    // Menghapus data pendaftaran beasiswa
    Route::delete('/adminis/beasiswa/hapus/{id}', [adminbeasiswa::class, 'destroy'])->name('admin.beasiswa.hapus');
    Route::put('/adminis/beasiswa/status/{id}', [adminbeasiswa::class, 'updateStatus'])->name('admin.beasiswa.updatestatus');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

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
    // profile setting
    Route::get('/profile', [ProfilesettingController::class, 'index'])->name('profile');
    Route::get('/profile/{id}/edit', [ProfilesettingController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update/{id}', [ProfilesettingController::class, 'update'])->name('items.update');

    //galang dana karya kreatif
    Route::get('/registergalangdana-successkaryakreatif', [GalangdanakaryakreatifController::class, 'notif'])->name('registergalangdana-successkaryakreatif');
    Route::get('/index-registerkaryakreatif', [GalangdanakaryakreatifController::class, 'index'])->name('index-registerkaryakreatif');
    Route::post('/process-form-registerkaryakreatif', [GalangdanakaryakreatifController::class, 'store'])->name('process-form-registerkaryakreatif');

    //galang dana kegiatan sosial
    Route::get('/registergalangdana-successkegiatansosial', [GalangdanakegiatansosialController::class, 'notif'])->name('registergalangdana-successkegiatansosial');
    Route::get('/index-registerkegiatansosial', [GalangdanakegiatansosialController::class, 'index'])->name('index-registerkegiatansosial');
    Route::post('/process-form-registerkegiatansosial', [GalangdanakegiatansosialController::class, 'store'])->name('process-form-registerkegiatansosial');

    //galang dana difabel
    Route::get('/registergalangdana-successdifabel', [GalangdanadifabelController::class, 'notif'])->name('registergalangdana-successdifabel');
    Route::get('/index-registerdifabel', [GalangdanadifabelController::class, 'index'])->name('index-registerdifabel');
    Route::post('/process-form-registerdifabel', [GalangdanadifabelController::class, 'store'])->name('process-form-registerdifabel');

    //galang dana panti asuhan
    Route::get('/registergalangdana-successkegiatanpantiasuhan', [GalangdanakegiatanpantiasuhanController::class, 'notif'])->name('registergalangdana-successkegiatanpantiasuhan');
    Route::get('/index-registerkegitanpantiasuhan', [GalangdanakegiatanpantiasuhanController::class, 'index'])->name('index-registerkegiatanpantiasuhan');
    Route::post('/process-form-registerkegiatanpantiasuhan', [GalangdanakegiatanpantiasuhanController::class, 'store'])->name('process-form-registerkegiatanpantiasuhan');

    //galang dana rumah ibadah
    Route::get('/registergalangdana-successkegiatanrumahibadah', [GalangdanakegiatanrumahibadahController::class, 'notif'])->name('registergalangdana-successkegiatanrumahibadah');
    Route::get('/index-registerkegiatanrumahibadah', [GalangdanakegiatanrumahibadahController::class, 'index'])->name('index-registerkegiatanrumahibadah');
    Route::post('/process-form-registerkegiatanrumahibadah', [GalangdanakegiatanrumahibadahController::class, 'store'])->name('process-form-registerkegiatanrumahibadah');

    //galang dana bantuan orang sakit
    Route::get('/registergalangdana-successbantuanorangsakit', [GalangdanakegiatanbantuanorangsakitController::class, 'notif'])->name('registergalangdana-successbantuanorangsakit');
    Route::get('/index-registerbantuanorangsakit', [GalangdanakegiatanbantuanorangsakitController::class, 'index'])->name('index-registerbantuanorangsakit');
    Route::post('/process-form-registerbantuanorangsakit', [GalangdanakegiatanbantuanorangsakitController::class, 'store'])->name('process-form-registerbantuanorangsakit');

    //galangdana bantuan bencana alam
    Route::get('/registergalangdana-successbantuanbencanaalam', [GalangdanabantuanbencanaalamController::class, 'notif'])->name('registergalangdana-successbantuanbencanaalam');
    Route::get('/index-registerbantuanbencanaalam', [GalangdanabantuanbencanaalamController::class, 'index'])->name('index-registerbantuanbencanaalam');
    Route::post('/process-form-registerbantuanbencanaalam', [GalangdanabantuanbencanaalamController::class, 'store'])->name('process-form-registerbantuanbencanaalam');

    //beasiswa controller
    route::get('/index-informasibeasiswa', [BeasiswaController::class, 'index'])->name('index-informasibeasiswa');
    route::get('/pendaftaran-beasiswa/{id}', [BeasiswaController::class, 'register'])->name('pendaftaran-beasiswa');
    route::get('/lamaranbeasiswa/', [BeasiswaController::class, 'proseslamaran'])->name('lamaranbeasiswa');
    Route::post('/store-beasiswa', [BeasiswaController::class, 'store'])->name('store_beasiswa');
});


require __DIR__ . '/auth.php';
