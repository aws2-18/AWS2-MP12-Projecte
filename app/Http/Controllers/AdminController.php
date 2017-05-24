<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Videos;
use App\User;
use Session;
use Auth;   
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
    public function showVideos()
    {

        $videos = DB::table('videos')->get();
        return view('adminviews.adminvideos', ['videos' => $videos]);
    }
    public function showUsuarios()
    {
        $usuarios = DB::table('users')->get();
        return view('adminviews.adminusuarios', ['usuarios'=> $usuarios]);
    }
    public function show($id)
    {
        $video = Videos::find($id);
        return view('adminviews.adminshowvideos')->withVideo($video);
    }
    public function showUsuario($id)
    {
        $user = User::find($id);
        return view('adminviews.adminshowusuarios')->withUser($user);
    }
    public function edit($id)
    {
        $video = Videos::find($id);
        return view('adminviews.admineditvideos')->withVideo($video);
    }
    public function editUser($id)
    {
        $user = User::find($id);
        return view('adminviews.admineditusers')->withUser($user);
    }
    public function update(Request $request, $id){
        $this->validate($request, array(
            'titulo'=> 'required',
            ));

        $video = Videos::find($id);
        $video->titulo = $request->input('titulo');
   //     $video->usuario = $request->input('usuario');

        $video->save();
        Session::flash('success','Este video se ha actualizado correctamente.');

        return redirect()->route('admin.videos.show', $video->id);
    }
    public function updateUser(Request $request, $id){
        $this->validate($request,array(
            'name' => 'required',
            'email' => 'required',
            'pais' => 'required',
            'provincia' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'cp' => 'required',
            ));
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->pais = $request->input('pais');
        $user->provincia = $request->input('provincia');
        $user->ciudad = $request->input('ciudad');
        $user->direccion = $request->input('direccion');
        $user->cp = $request->input('cp');
        $user->save();
        Session::flash('success','Este usuario se ha actualizado correctamente.');
        return redirect()->route('admin.usuarios.show', $user->id);
    }
    public function destroy($id){
        $video = Videos::find($id);
        $video->delete();
        Session::flash('success','El video ha sido eliminado correctamente.');
        return redirect()->route('admin.videos');
    }
    public function destroyUser($id){
        $user = User::find($id);
        $user->delete();
        Session::flash('success','El usuario ha sido eliminado correctamente.');
        return redirect()->route('admin.usuarios');
    }
    public function uploadVideo()
    {

         return view('adminviews.uploadVideoForm');
    }
    public function createUser()
    {
        return view('adminviews.createUserForm');
    }
    public function store(Request $request){

        $video = new Videos();
        if( $request->has("titulo") ) // && $request->has("video")
         {  

            $video->titulo = $request->input("titulo");
            $video->usuario = Auth::user()->name;
            $video->idusuario = Auth::user()->id;
            $file = $request->file('video');
            $filename = $video['titulo']. '-' .$video['idusuario'];
            $video->url = $filename;
            if($video['url']){
                 \Storage::disk('videos')->put($filename, \File::get($file));
            }
            $video->save();
            Session::flash('success', '¡Video subido con exito!');
            return redirect()->route('admin.videos');
            
         }
        }
    public function storeUser(Request $request){
        $user = new User();
        if ($request->has('nombre') || $request->has('email') || $request->has('password'))
        {
            $user->name = $request->input('nombre');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->save();
            Session::flash('success','Usuario creado con exito!');
            return redirect()->route('admin.usuarios');
        }
    }
}
