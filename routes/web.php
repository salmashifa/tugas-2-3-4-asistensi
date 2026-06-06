<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
}); 

use App\Http\Controllers\AboutController;
Route::get('/about', [AboutController::class, 'index'])->name('about');
