<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;


//Sudut Pandang Admin Pendidikan
Route::get('/', function () {
    return view('LoginPendi');
});

Route::get('/LoginAdmin', function () {
    return view('LoginAdmin');
})->name('LoginAdmin');

Route::get('/', function () {
    return view('LoginPendi');
})->name('LoginPendi');

Route::get('/RegisPendi', function () {
    return view('RegisPendi');
});

Route::get('/TngValid', function () {
    return view('TngValid');
});

Route::get('/HomePendi', function () {
    return view('HomePendi');
});

Route::get('/RiwayatPendi', function () {
    return view('RiwayatPendi');
});

Route::get('/TambahDtMhs', function () {
    return view('TambahDtMhs');
});

Route::get('/IsiUniv', function () {
    return view('IsiUniv');
});

//Sudut Pandang Admin Bank
Route::middleware(['web'])->group(function () {
    Route::get('/LoginAdmin', [PageController::class, 'login_admin'])->name('LoginAdmin');

    Route::post('/ceklogin', [AuthController::class, 'ceklogin'])->name('ceklogin');

    Route::post('/saveAkun', [PageController::class, 'saveAkun'])->name('saveAkun');

    Route::group(['middleware' => ['auth:admin_bank']], function () {
        Route::get('/HomeAdmin', function () {
            return view('HomeAdmin');
        })->name('HomeAdmin');
    });
    Route::middleware(['auth:admin_instansi'])->group(function () {
        Route::get('/HomePendi', function () {
            return view('HomePendi');
        })->name('HomePendi');
    });
});

Route::get('/ReqNoUniv', function () {
    return view('ReqNoUniv');
});

Route::get('/CariUnivVa', function () {
    return view('CariUnivVa');
});

Route::get('/CariUnivVy', function () {
    return view('CariUnivVy');
});

Route::get('/ReqGenVa', function () {
    return view('ReqGenVa');
});

Route::get('/ByrUniv', function () {
    return view('ByrUniv');
});

Route::get('/DtlPerminAkun', function () {
    return view('DtlPerminAkun');
});

Route::get('/ListVaMhs', function () {
    return view('ListVaMhs');
});

Route::get('/ValidVa', function () {
    return view('ValidVa');
});

Route::get('/TambahMhs', function () {
    return view('TambahMhs');
});
Route::post('/check-nim', [PageController::class, 'checkNIM'])->name('checkNIM'); // Route untuk validasi NIM
Route::post('/check-email', [PageController::class, 'checkEmail'])->name('checkEmail'); // Route untuk validasi email
Route::post('/check-telpon', [PageController::class, 'checkTelpon'])->name('checkTelpon'); // Route untuk validasi nomor telepon
Route::post('/tambah-mhs', [PageController::class, 'tambahMhs'])->name('tambahMhs'); // Route untuk submit form
Route::post('/update-prices', [PageController::class, 'updateprice'])->name('updatePrices');
Route::get('/setting-harga', [PageController::class, 'showSettingHarga'])->name('settingHarga');
Route::post('/setting-harga/update', [PageController::class, 'updatePrices'])->name('updatePrices');
Route::get('/setting-harga', [PageController::class, 'settingHarga'])->name('settingHarga');
Route::get('/SettingHarga', [PageController::class, 'showSettingHarga'])->name('settingHarga');
Route::get('/DftMhs', [PageController::class, 'daftarMahasiswa'])->name('daftarMahasiswa');
Route::get('/mahasiswa/{id}/edit', [PageController::class, 'editMahasiswa'])->name('editMahasiswa');
Route::put('/mahasiswa/{id}/update', [PageController::class, 'updateMahasiswa'])->name('updateMahasiswa');