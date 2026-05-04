<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AuthController::class,'loginForm']);
Route::get('/register', [AuthController::class,'registerForm']);

Route::post('/login',[AuthController::class,'login']);
Route::post('/register', [AuthController::class,'register']);

Route::get('/logout',[AuthController::class,'logout']);

Route::middleware('admin.session')->group(function(){

    Route::get('/admin/dashboard',[AdminController::class,'dashboard']);

    Route::get('/admin/anggota',[AdminController::class,'anggota']);
    Route::get('/admin/anggota/hapus/{id}', [AdminController::class,'hapusAnggota']);

    Route::get('/admin/aspirasi', [AdminController::class,'aspirasi']);
    Route::get('/admin/aspirasi/hapus/{id}', [AdminController::class,'hapusAspirasi']);
    Route::get('/admin/aspirasi/selesai/{id}', [AdminController::class,'selesai']);
});

Route::middleware('anggota.cookie')->group(function(){

    Route::get('/anggota/dashboard', [AnggotaController::class,'dashboard']);

    Route::get('/anggota/profile', [AnggotaController::class,'profile']);
    Route::post('/anggota/profile/update', [AnggotaController::class,'updateProfile']);

    Route::get('/anggota/aspirasi', [AnggotaController::class,'aspirasi']);
    Route::post('/anggota/aspirasi/kirim', [AnggotaController::class,'kirim']);
});