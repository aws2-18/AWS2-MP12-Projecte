<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
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
            $Usuario->save();
            Session::flash('success', '¡Campos actualizados con exito!');
            return view('auth.edit',array('Usuario'=>$Usuario, 'id'=>$id));
            
        } else
            Session::flash('warning', 'Revisa los campos, no se ha podido enviar el correo.');
            return view('auth.edit',array('Usuario'=>$Usuario, 'id'=>$id));
  			 
    }	
    
}
