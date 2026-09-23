<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/post/{id}', function ($id) {
    return view('post');
})->name('post.show');
