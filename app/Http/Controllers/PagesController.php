<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller
{
    public function getContact() {
        return view('pages.contact');
    }

    public function postContact(Request $request) {
        $this->validate($request, array(
            'nombre' => 'min:1',
            'email' => 'required|email',
            'subject' => 'min:4',
            'message' => 'min:10'
        ));

        $data = array(
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message,
            'contacto' => $request->contacto,

        );
        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('lpuigferrer@iesesteveterradas.cat');
            $message->subject($data['subject']);
        });

        Session::flash('success', '¡Mensaje enviado con exito!');
        Session::flash('warning', 'Revisa los campos, no se ha podido enviar el correo.');
        return view('pages.contact');
    }
}

