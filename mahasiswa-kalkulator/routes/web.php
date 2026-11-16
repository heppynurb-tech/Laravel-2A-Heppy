<?php

use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/daftar/mahasiswa');
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga'])->name('kalkulator.segitiga');
