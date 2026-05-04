<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\AdminController;

// HOME
Route::get('/', function () {
    return view('home');
});

// PENDAFTARAN
Route::get('/pendaftaran', [AnggotaController::class, 'create']);
Route::post('/pendaftaran', [AnggotaController::class, 'store']);

// ASPIRASI
Route::get('/aspirasi', [AspirasiController::class, 'create']);
Route::post('/aspirasi', [AspirasiController::class, 'store']);

// ADMIN
Route::get('/admin', [AdminController::class, 'index']);

// DELETE (sementara pakai GET biar gampang)
Route::get('/delete-anggota/{id}', [AdminController::class, 'deleteAnggota']);
Route::get('/delete-aspirasi/{id}', [AdminController::class, 'deleteAspirasi']);