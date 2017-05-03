<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
     public function getRegistro() {
    	return view('auth.registro');
    }
}
