<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

