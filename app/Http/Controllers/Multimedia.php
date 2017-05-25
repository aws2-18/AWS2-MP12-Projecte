<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;
use App\User;
use App\Like;
Use App\Comments;
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
            $video->usuario = Auth::user()->name;
            $video->idusuario = Auth::user()->id;
            $file = $request->file('video');
            $filename = $video['titulo']. '-' .$video['usuario'];
            $filename = $video['titulo']. '-' .$video['idusuario'];
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
    
    public function postLikePost(Request $request)
    {
        $video_id = $request['videoId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $video = Videos::find($video_id);
        if (!$video){
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('video_id', $video_id)->first();
        if ($like) {
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like){
                $like->delete();
                return null;
            }
        } else{ 
            $like = new Like();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->video_id = $video->id;
        if ($update) {
            $like->update();
        } else{
            $like->save();
        }
        return null;
    }

    public function createComment(Request $request){
        $comment = e($request->comment);
        $date = date('Y-m-d');
        $time = date('H:m:s');
        Comments::insert([
            'comment' => $comment,
            'id_user' => Auth::user()->id,
            'date' => $date,
            'time' => $time,
            ]);


    }
}