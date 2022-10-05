<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home'); 
});

Route::get('/login', function () {
    return view('signin');
});

Route::get('/cadastro', function () {
    return view('signup');
});

Route::get('/busca', function () {
    $busca = request('search');
    return view('busca', ['busca' => $busca]);
});

Route::get('/conversor/{id?}', function ($id = null) {
    return view('conversor', ['id' => $id]);
});
