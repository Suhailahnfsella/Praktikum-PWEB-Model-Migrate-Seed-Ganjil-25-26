<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KrsController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login');

Route::get('/',[KrsController::class, 'index']);
