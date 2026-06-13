<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AboutController;

Route::get('/about', [AboutController::class, 'index'])->name('about'); 

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }
}