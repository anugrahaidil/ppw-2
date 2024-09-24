<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BukuController;

Route::get('/posts/{post}/comments', [CommentController::class, 'index']);

Route::resource('posts.comments', CommentController::class);


// use App\Http\Controllers\CommentController;

// Route::get('/posts/{post}/comments', [CommentController::class, 'index'])->name('comments.index');
// Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');


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

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::post('/buku/{id}/update', [BukuController::class, 'update'])->name('buku.update');