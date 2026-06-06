<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Menghubungkan halaman utama (/) ke HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');