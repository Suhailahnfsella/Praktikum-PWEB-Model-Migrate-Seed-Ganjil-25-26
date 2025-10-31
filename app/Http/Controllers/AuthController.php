<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginPage() {
        return view('loginpage');
    }

    public function login() {
        return view('loginpage');
    }
}
