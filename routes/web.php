<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Sekretaris\SekretarisController;
use App\Http\Controllers\Petugas\PetugasController;
use App\Http\Controllers\Ketua\KetuaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Staff Routes
Route::middleware('auth', "staffMiddleware")->group(function (){
    Route::get('dashboard', [StaffController::class, 'index'])->name('dashboard');
    Route::get('suratmasuk', [StaffController::class, 'indexsuratmasuk'])->name('suratmasuk');
    Route::get('suratkeluar', [StaffController::class, 'indexsuratkeluar'])->name('suratkeluar');
    Route::get('form/suratmasuk', [SuratMasukController::class, 'create'])->name('tambahsuratmasuk');
});

// Sekretaris Routes
Route::middleware('auth', "sekretarisMiddleware")->group(function (){
    Route::get('sekretaris/dashboard', [SekretarisController::class, 'index'])->name('sekretaris.dashboard');
});

// Petugas Routes
Route::middleware('auth', "petugasMiddleware")->group(function (){
    Route::get('petugas/dashboard', [PetugasController::class, 'index'])->name('petugas.dashboard');
});

// Ketua Routes
Route::middleware('auth', "ketuaMiddleware")->group(function (){
    Route::get('ketua/dashboard', [KetuaController::class, 'index'])->name('ketua.dashboard');
});