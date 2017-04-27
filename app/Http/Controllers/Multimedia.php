<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Multimedia extends Controller
{

    public function getVideos(){
    	return view('Contenido.videos');
    }

    public function getCategorias(){
    	return view('Contenido.categorias');
    }
    public function getAlbums(){
    	return view('Contenido.albums');
    }
}
