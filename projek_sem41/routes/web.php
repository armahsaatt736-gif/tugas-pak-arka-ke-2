<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Homecontroller;

Route::get('/', [Homecontroller::class, 'index']);