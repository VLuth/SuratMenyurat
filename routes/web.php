<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\SuratkeluarController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Sekretaris\SekretarisController;
use App\Http\Controllers\Ketua\KetuaController;
use App\Http\Controllers\Petugas\PetugasController;
use Illuminate\Support\Facades\Route;


Route::get('/suratmasuk/{id}', 'SuratMasukController@show')->name('tampilkansuratmasuk');

route::get('/dashboard', [StaffController::class, 'index'])->name('dashboard');

Route::get('/suratmasuk', [StaffController::class, 'suratmasukstaff'])->name('suratmasuk');
Route::get('/formtambah/suratmasuk', [SuratmasukController::class, 'create'])->name('tambahsuratmasuk');
route::post('/suratmasuk', [SuratmasukController::class, 'store'])->name('storesuratmasuk');
route::get('/download{file}', [SuratmasukController::class, 'downloadfile'])->name('download');
route::post('/view/file/{id}', [SuratmasukController::class, 'viewfile'])->name('view');
route::put('/prosesupdate/{id}', [SuratmasukController::class, 'update'])->name('updatesuratmasuk');
route::get('/formedit/suratmasuk/{id}', [SuratmasukController::class, 'edit'])->name('editsuratmasuk');
route::get('/filter', [SuratmasukController::class, 'filter'])->name('filter');
Route::get('/hapussuratmasuk/{id}', [SuratmasukController::class, 'destroy'])->name('hapussuratmasuk');

Route::get('/verifikasi', [StaffController::class, 'verifikasi'])->name('verifikasi');
route::put('/verifikasi/{id}', [SuratmasukController::class, 'verifikasi'])->name('verifikasisuratmasuk');

Route::get('/disposisi', [StaffController::class, 'disposisi'])->name('disposisi');
route::put('/disposisi/{id}', [SuratmasukController::class, 'disposisi'])->name('disposisisuratmasuk');

Route::get('/tindaklanjut', [StaffController::class, 'tindaklanjut'])->name('tindaklanjut');
route::put('/tindaklanjut/{id}', [SuratmasukController::class, 'tindaklanjut'])->name('tindaklanjutsuratmasuk');

route::get('/suratkeluar', [StaffController::class, 'suratkeluarstaff'])->name('suratkeluarstaff');

// SURAT KELUAR

Route::get('/suratkeluar', [StaffController::class, 'suratkeluarstaff'])->name('suratkeluar');
Route::get('/formtambah/suratkeluar', [SuratkeluarController::class, 'create'])->name('tambahsuratkeluar');
route::post('/suratkeluar', [SuratkeluarController::class, 'store'])->name('storesuratkeluar');


Route::get('/main', function () {
    return view('layouts.main');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


