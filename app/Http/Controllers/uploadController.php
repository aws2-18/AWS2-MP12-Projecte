<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function index(){
    	return view('upload.upload');
    }

    public function pepito(Request $request){
  
    /*	return $request->image->store('guardar');
    */


    	$file = $request->file('image');

    	$nombre = $file->getClientOriginalName();

    	\Storage::disk('guardar')->put($nombre, \File::get($file));
    }
}
