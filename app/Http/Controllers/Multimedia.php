<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;
class Multimedia extends Controller
{

    public function getVideos(){
    	$arrayVideos = Videos::all();
    	return view('Contenido.videos', array("arrayVideos"=>$arrayVideos));
    }

    public function getCategorias(){
    	return view('Contenido.categorias');
    }
    public function getAlbums(){
    	return view('Contenido.albums');
    }
}
