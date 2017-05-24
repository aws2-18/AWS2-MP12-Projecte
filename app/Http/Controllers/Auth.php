<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
Use App\Http\Controllers\auth;
class Auth extends Controller
{
     public function getRegistro() {
    	return view('auth.registro');
    }
    public function getPanel($id){
    	$Usuario = User::findOrFail($id);
		return view('auth.show',array('Usuario'=>$Usuario, 'id'=>$id));
    }
    public function getEdit($id){
    	$Usuario = User::findOrFail($id);
		return view('auth.edit',array('Usuario'=>$Usuario, 'id'=>$id));
    }
    public function postEdit(Request $request, $id){
        

         $Usuario = User::find($id);

        if( $request->has("name") || $request->has("email") || $request->has("pais") || $request->has("provincia") || $request->has("ciudad") || $request->has("direccion") || $request->has("cp"))
         {	
            $Usuario->name = $request->input("name");
            $Usuario->email = $request->input("email");
            $Usuario->pais = $request->input("pais");
            $Usuario->provincia = $request->input("provincia");
            $Usuario->ciudad = $request->input("ciudad");
            $Usuario->direccion = $request->input("direccion");
            $Usuario->cp = $request->input("cp");
            if($request->file("imagen")){
            $file = $request->file('imagen');
            $filename = $Usuario['name']. '-' .$Usuario['id']. '.jpg';
            if($Usuario['imagen']){
                 \Storage::disk('guardar')->put($filename, \File::get($file));
            }
            }
            $Usuario->save();
            Session::flash('success', '¡Campos actualizados con exito!');
            return view('auth.edit',array('Usuario'=>$Usuario, 'id'=>$id));
            
        } else
            Session::flash('warning', 'Revisa los campos, no se ha podido enviar el correo.');
            return view('auth.edit',array('Usuario'=>$Usuario, 'id'=>$id));
  			 
    }	
    public function getUserImage($filename)
    {
        $file = Storage::disk('guardar')->get($filename);
        return new Response($file, 200);
    }
    
}
