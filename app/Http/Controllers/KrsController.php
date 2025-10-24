<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Matkul;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function index() {
        $users = User::with('krses')->get();
        $matkuls = Matkul::with('krs')->get();

        return view('welcome', compact('users','matkuls'));
    }
}
