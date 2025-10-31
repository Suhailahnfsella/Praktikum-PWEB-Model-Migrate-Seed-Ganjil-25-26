<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KrsController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login');
Route::post('/login',[AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/',[KrsController::class, 'index'])->middleware('authUser');
