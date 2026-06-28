<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Pastikan 'Controllers' diawali huruf kapital C jika error
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DocumentationFileController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);
Route::get('/Donasi', [DonasiController::class, 'index']);
Route::resource('campaign', CampaignController::class);

Route::get('/Documentations', [DocumentationFileController::class, 'index']);
Route::post('/Documentations', [DocumentationFileController::class, 'store']);