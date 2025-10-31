<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\MatkulController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login');
Route::post('/login',[AuthController::class, 'login'])->name('cekLogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('/',[KrsController::class, 'index'])->name('welcome');
});



// Route::get('/',[KrsController::class, 'index'])->name('welcome');
// CMS (Content Management System)
// Setiap CRUD (Index, Create, Store, Show, Edit, Update, Destroy)
// php artisan make:NAMACONTROLLER --resource

// Route
// Route::resource('fasilitas', MatkulController::class);
// Route::resource('ruangan', MatkulController::class);
// Route::resource('tingkatan', MatkulController::class);