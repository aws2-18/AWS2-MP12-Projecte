<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Footer extends Controller
{
    public function getInformacion() {
    	return view('Footer.informacion');
    }
    public function getPartners() {
    	return view('Footer.partners');
    }
    public function getAyuda() {
    	return view('Footer.ayuda');
    }
    public function getBlog() {
    	return view('Footer.blog');
    }
}
