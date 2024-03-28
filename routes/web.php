<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperController;

Route::get('/', [SuperController::class, 'index']);
Route::get('/about', [SuperController::class, 'about']);
Route::get('/contact', [SuperController::class, 'contact']);