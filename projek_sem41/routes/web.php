<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Homecontroller;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;

Route::get('/', [Homecontroller::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);