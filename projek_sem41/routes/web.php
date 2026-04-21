<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Homecontroller;
use App\Http\Controllers\ProfilController;

Route::get('/', [Homecontroller::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);