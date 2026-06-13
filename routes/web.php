<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\AnggotaKelompokController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::put('/contact/{id}', [ContactController::class, 'update'])->name('contact.update');
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::get('/', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/contact', fn() => view('contact'))->name('contact');

require __DIR__.'/auth.php';

Route::resource('kelompok', KelompokController::class);
 
// ── Anggota Kelompok (nested resource, semua admin) ───────────────────────────
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('kelompok/{kelompok}/anggota/create',            [AnggotaKelompokController::class, 'create'])->name('anggota.create');
    Route::post('kelompok/{kelompok}/anggota',                  [AnggotaKelompokController::class, 'store'])->name('anggota.store');
    Route::get('kelompok/{kelompok}/anggota/{anggota}/edit',    [AnggotaKelompokController::class, 'edit'])->name('anggota.edit');
    Route::put('kelompok/{kelompok}/anggota/{anggota}',         [AnggotaKelompokController::class, 'update'])->name('anggota.update');
    Route::delete('kelompok/{kelompok}/anggota/{anggota}',      [AnggotaKelompokController::class, 'destroy'])->name('anggota.destroy');
});