<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function index(){
    	return view('upload.upload');
    }

    public function store(request $request){
    	$request->file('image');
    	return $request->image->store('public/img');
    }
}
