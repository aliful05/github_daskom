<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
