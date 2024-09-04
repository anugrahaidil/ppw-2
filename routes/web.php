<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Anugrah Aidil Fitri',
        'email' => 'anugrahaidilfitri@mail.ugm.ac.id'
    ]);
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/posts', [PostController::class, 'index']);