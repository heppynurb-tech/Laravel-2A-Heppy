<?php

use Illuminate\Support\Facades\Route;
//import Controller
use App\Http\Controllers\Web;

Route::get('/', function () {
    //return view('welcome');
    return "Hallo Namaku adalah Heppy sang LARAVEL, Salam Kenal";
});

// route baru 
Route::get('/about', function(){
    // return view('welcome')
    return"<h2>Ini adalah laman About</h2>";
});

// route ke web controller Web ke fungsi home
Route::get('/web', [Web::class, 'home']);

// route ke controller Web ke fungsi profil
Route::get('/profil/{nama}', [Web::class, 'profil']);