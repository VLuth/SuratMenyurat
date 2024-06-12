<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('sekretaris/dashboard', [SekretarisController::class, 'index'])
    ->middleware(['auth','sekretaris']);
Route::get('ketua/dashboard', [KetuaController::class, 'index'])
    ->middleware(['auth','ketua']);
Route::get('petugas/dashboard', [PetugasController::class, 'index'])
    ->middleware(['auth','petugas']);