<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect()->route('login.form');
});

Route::get('/login', [PageController::class, 'loginForm'])->name('login.form');
Route::post('/login', [PageController::class, 'loginProcess'])->name('login.process');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])
     ->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])
     ->name('profile');
Route::get('/rekomendasi', [PageController::class, 'rekomendasi'])->name('rekomendasi');
