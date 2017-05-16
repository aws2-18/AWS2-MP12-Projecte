<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;
use App\User;
use Auth;
use Session;
use DB;
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
    public function getFormvideo(){
        return view('Videos.formupload');
    }
    public function postUpload(Request $request, $id){
        
        $video = new Videos();
        if( $request->has("title") || $request->has("video"))
         {  
           // $Usuario->usuario = $name = Auth::user()->name;
            $video->titulo = $request->input("title");
            $video->usuario = Auth::user()->id;
            $file = $request->file('video');
            $filename = $video['titulo']. '-' .$video['usuario'];
            $video->url = $filename;
            if($video['url']){
                 \Storage::disk('videos')->put($filename, \File::get($file));
            }
            $video->save();
            Session::flash('success', '¡Video subido con exito!');
            return redirect('/clips');
            
        } else
            Session::flash('warning', 'Revisa los campos, no se ha podido enviar el correo.');
            return view('auth.edit',array('Usuario'=>$Usuario, 'id'=>$id));
             
    }   
    public function getVideos3(){
        $videos = DB::table('videos')->get();
        return view('Contenido.videos', ['videos' => $videos]);
    }
    public function getVideo2(Video $video)
        {
            $name = $video->name;
            $fileContents = Storage::disk('videos')->get("{$name}");
            $response = Response::make($fileContents, 200);
            $response->header('Content-Type', "video/mp4");
            return $response;
        }
    public function getVideoInfo($id){

        $video = Videos::find($id);
        return view('Contenido.show',array('video'=>$video));
    }

}
