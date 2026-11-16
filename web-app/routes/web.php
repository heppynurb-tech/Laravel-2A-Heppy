<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/home', [DashboardController::class, 'home'])->name('home.page');
Route::get('/product', [DashboardController::class, 'product'])->name('product');
Route::get('/about', [DashboardController::class, 'about'])->name('about');
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail'])
    ->whereNumber('harga')
    ->name('product.detail');
