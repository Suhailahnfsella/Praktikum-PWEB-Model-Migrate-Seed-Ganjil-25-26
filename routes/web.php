<?php

use App\Http\Controllers\KrsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[KrsController::class, 'index']);
