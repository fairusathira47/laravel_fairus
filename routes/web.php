<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/kontak', function () {
    return view('kontak');
});