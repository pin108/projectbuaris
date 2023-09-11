<?php

use App\Models\GalangDana;
use App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminbeasiswa;
use App\Http\Controllers\AdminkategoribeasiswaController;
use App\Http\Controllers\AdminkategorigalangdanaController;
use App\Http\Controllers\adminkeuangancontroller;
use App\Http\Controllers\AdminlulusbeasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\FindGalangdanaController;
use App\Http\Controllers\ProfilesettingController;
use App\Http\Controllers\GalangdanadifabelController;
use App\Http\Controllers\GalangdanakaryakreatifController;
use App\Http\Controllers\GalangdanakegiatansosialController;
use App\Http\Controllers\GalangdanabantuanbencanaalamController;
use App\Http\Controllers\GalangdanakegiatanpantiasuhanController;
use App\Http\Controllers\GalangdanakegiatanrumahibadahController;
use App\Http\Controllers\GalangdanakegiatanbantuanorangsakitController;
use App\Http\Controllers\payment;
use App\Http\Controllers\ProgressgalangdanaController;

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

// Route::get('/', function () {
//     return view('pages.home');
// });
//not middleware
Route::get('/', [HomeController::class, 'main'])->name('/');
// Route::get('/detail', function () {
//     return view('pages.show');
// });

Route::get('/dashboard', function () {
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
})->middleware(['auth', 'verified'])->name('dashboard');

//galang dana
Route::get('/galangdana', function () {
    return view('pages.galangdana.galangdana');
});

//galang dana lainnya
Route::get('/galangdanalainnya', function () {
    return view('pages.galangdana.galangdanalainnya');
})->name('galangdanalainnya');

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

    //cek berkas galang dana
    route::post('/adminis/cekberkas/galangdana', [admin::class, 'cekberkas'])->name('galangdana.cekberkas');
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
    Route::get('/adminis/payment/', [adminkeuangancontroller::class, 'index'])->name('admin.payment');
    Route::post('/adminis/payment/status/{id}', [adminkeuangancontroller::class, 'updateStatus'])->name('admin.payment.updatestatus');

    //laporan galang dana
    route::get('/adminis/laporangalangdana', [adminkeuangancontroller::class, 'laporangalangdana'])->name('adminpayment.laporangalangdana');

    //pencairan galang dana
    route::get('adminis/index/pencairandana', [adminkeuangancontroller::class, 'indexperncairandana'])->name('dana.index');
    route::post('adminis/store/pencairandana', [adminkeuangancontroller::class, 'storepencairan'])->name('dana.store');
    route::post('adminis/unduh/rekapgalangdana', [adminkeuangancontroller::class, 'generatepdf'])->name('rekapgalangdana.generatepdf');

    //kategori beasiswa
    Route::get('/adminis/kategoribeasiswabaru/', [AdminkategoribeasiswaController::class, 'index'])->name('kategoribeasiswas.index');
    route::get('/adminis/create/tambahdatakategori', [AdminkategoribeasiswaController::class, 'create'])->name('kategoribeasiswa.create');
    route::get('/adminis/edit/datakategori/{id}', [AdminkategoribeasiswaController::class, 'update'])->name('kategoribeasiswa.update');
    Route::post('/adminis/store/kategoribeasiswabaru/', [AdminkategoribeasiswaController::class, 'store'])->name('kategoribeasiswas.store');
    Route::put('/adminis/put/kategoribeasiswabaru/{id}', [AdminkategoribeasiswaController::class, 'put'])->name('kategoribeasiswas.put');
    Route::delete('adminis/delete/kategoribeasiswa/{id}', [AdminkategoribeasiswaController::class, 'destroy'])->name('kategoribeasiswa.destroy');

    //kategori galangdana
    route::get('adminis/index/kategorigalangdana', [AdminkategorigalangdanaController::class, 'index'])->name('kategorigalangdana.index');
    route::get('adminis/create/kategorigalangdana', [AdminkategorigalangdanaController::class, 'create'])->name('kategorigalangdana.create');
    route::post('adminis/store/kategorigalangdana', [AdminkategorigalangdanaController::class, 'store'])->name('kategorigalangdana.store');
    route::get('adminis/indexedit/kategorigalangdana/{id}', [AdminkategorigalangdanaController::class, 'edit'])->name('kategorigalangdana.edit');
    route::put('adminis/update/kategorigalangdana/{id}', [AdminkategorigalangdanaController::class, 'update'])->name('kategorigalangdana.update');
    route::delete(
        'adminis/delete/kategorigalangdana/{id}',
        [AdminkategorigalangdanaController::class, 'destroy']
    )->name('kategorigalangdana.destroy');

    //konfirmasi lulus beasiswa
    route::get('adminis/index/lulusbeasiswa', [AdminlulusbeasiswaController::class, 'index'])->name('lulusbeasiswa.index');
    route::post('adminis/unduh/lulusbeasiswa', [AdminlulusbeasiswaController::class, 'generatepdf'])->name('lulusbeasiswa.generatepdf');
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

    Route::get('/showpengalangdana', function () {
        return view('pages.showpengalangdana');
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
    // profile setting
    Route::get('/profile', [ProfilesettingController::class, 'index'])->name('profile');
    Route::get('/profile/{id}/edit', [ProfilesettingController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/changepassword/{id}', [ProfilesettingController::class, 'password'])->name('profile.password');
    Route::put('/profile/updatepassword', [ProfilesettingController::class, 'updatepassword'])->name('profile.updatepassword');
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

    //find kategori galang dana
    Route::get('carigalangdana-bencanaalam', [FindGalangdanaController::class, 'findbencanaalam'])->name('carigalangdana-bencanaalam');
    Route::get('carigalangdana-orangsakit', [FindGalangdanaController::class, 'findorangsakit'])->name('carigalangdana-orangsakit');
    Route::get('carigalangdana-difabel', [FindGalangdanaController::class, 'finddifabel'])->name('carigalangdana-difabel');
    Route::get('carigalangdana-karyakreatif', [FindGalangdanaController::class, 'findkaryakreatif'])->name('carigalangdana-karyakreatif');
    Route::get('carigalangdana-kegiatansosial', [FindGalangdanaController::class, 'findkegiatansosial'])->name('carigalangdana-kegiatansosial');
    Route::get('carigalangdana-pantiasuhan', [FindGalangdanaController::class, 'findpantiasuhan'])->name('carigalangdana-pantiasuhan');
    Route::get('carigalangdana-rumahibadah', [FindGalangdanaController::class, 'findrumahibadah'])->name('carigalangdana-rumahibadah');
    Route::get('carigalangdana-lainnya', [FindGalangdanaController::class, 'findlainnya'])->name('carigalangdanlain');
    //beasiswa controller
    route::get('/index-informasibeasiswa', [BeasiswaController::class, 'index'])->name('index-informasibeasiswa');
    route::get('/pendaftaran-beasiswa/{id}', [BeasiswaController::class, 'register'])->name('pendaftaran-beasiswa');
    route::get('/lamaranbeasiswa/', [BeasiswaController::class, 'proseslamaran'])->name('lamaranbeasiswa');
    Route::post('/store-beasiswa', [BeasiswaController::class, 'store'])->name('store_beasiswa');


    //payment transaksi
    Route::post('payments', [payment::class, 'store'])->name('payments');
    Route::get('payments/create/{galangdana_id}', [payment::class, 'create'])->name('payments.create');
    Route::get('payments/index', [payment::class, 'index'])->name('payments.index');
    Route::get('payments/history', [payment::class, 'index'])->name('payments.history');
    // unggah bukti
    Route::get('payments/upload/{id}', [payment::class, 'showUploadBuktiTransaksi'])->name('payments.upload');
    Route::post('payments/update/upload/{id}', [payment::class, 'updateBuktiTransaksi'])->name('payments.updateBuktiTransaksi');
    Route::get('kirim-email/{id}', 'App\Http\Controllers\MailController@index')->name('kirim-email');

    //donasi
    Route::get('/donasi/{id}', [payment::class, 'detail'])->name('detail');
    Route::get('/kirimdonasi/{id}', [payment::class, 'senddonasi'])->name('senddonasi');
    Route::post('/kirimdoa', [payment::class, 'storedoa'])->name('kirimdoa');

    //proses galang dana
    route::get('prosesgalangdana/index', [ProgressgalangdanaController::class, 'index'])->name('progressgalangdana.index');
});


require __DIR__ . '/auth.php';
