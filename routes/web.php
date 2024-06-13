<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Sekretaris\SekretarisController;
use App\Http\Controllers\Ketua\KetuaController;
use App\Http\Controllers\Petugas\PetugasController;
use Illuminate\Support\Facades\Route;

route::get('/dashboard', [StaffController::class, 'index'])->name('dashboard');
Route::get('/suratmasuk', [StaffController::class, 'suratmasukstaff'])->name('suratmasuk');
Route::get('/form/suratmasuk', [SuratmasukController::class, 'create'])->name('tambahsuratmasuk');
route::post('/suratmasuk', [SuratmasukController::class, 'store'])->name('storesuratmasuk');
route::get('/form/suratmasuk', [SuratmasukController::class, 'edit'])->name('editsuratmasuk');
Route::get('/hapussuratmasuk/{id}', [SuratmasukController::class, 'destroy'])->name('hapussuratmasuk');


route::get('/suratkeluar', [StaffController::class, 'suratkeluarstaff'])->name('suratkeluarstaff');


Route::get('/', function () {
    return view('welcome');
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


