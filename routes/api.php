<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

// Contact
Route::get('/contacts',          [ApiController::class, 'contactIndex']);
Route::post('/contacts',         [ApiController::class, 'contactStore']);
Route::delete('/contacts/{id}',  [ApiController::class, 'contactDestroy']);

// Members
Route::get('/members', [ApiController::class, 'memberIndex']);

// Team
Route::get('/team', [ApiController::class, 'teamIndex']);