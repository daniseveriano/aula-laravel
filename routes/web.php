<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/create', [EventController::class, 'create']);

Route::post('/events', [EventController::class, 'store']);

Route::get('/{id}', [EventController::class, 'show']);

Route::get('/contact', function () {
    return view('contact');
});