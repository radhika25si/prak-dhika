<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);
Route::get('/home', [HomeController::class, 'index'] );



