<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

use App\Http\Controllers\AboutController;
Route::get('/about', [AboutController::class, 'index'])->name('about');