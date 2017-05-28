@extends('layout.master')
@section('content')

<div class="row">
<div class="col-md-12">
@include('partials._messages')
</div>
             <div class="col-md-6">
                <h1 id="white"><center>Contactar con administrador</center></h1>
                <hr>


                <form action="{{ url('contacta') }}" method="POST" class="contact_form" name="contact_form">
                    {{ csrf_field() }}
                <ul  id="contactaradmin">
                  <li>
                    <label name="nombre" id="white">Nombre:</label>
                    <input id="nombre" name="nombre" class="form-control" required>
                  </li>
                  <li>
                    <label name="apellidos" id="white">Apellidos:</label>
                    <input id="apellidos" name="apellidos" class="form-control">
                  <li>
                    <label name="email" id="white">Email:</label>
                    <input id="email3" name="email" class="form-control" required type="email">
                    <span class="form_hint" id="white">Formato "name@something.com"</span>
                  </li>

                  <li>
                    <label name="subject" id="white">Asunto:</label>
                    <input id="subject" name="subject" class="form-control" required pattern=".{4,}" placeholder="Mínimo 4 caracteres">
                  </li>
                  <li>
                    <label name="message" id="white">Mensaje:</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Mínimo 10 caracteres" maxlength="150" required></textarea>
                  </li>
                  <li>
                    <label name="contacto" id="white">Telefono</label>
                    <input id="contacto" name="contacto" class="form-control">
                  </li><br>
                  <li>
                  <button class="btn btn-enviarcorreo" type="submit">Enviar correo</button>
                  </li>
                  </ul>
                  </form>
            </div>
            <div class="col-md-6">
            <h1 id="white"><center>Ubicación</center></h1>
            <hr>
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2994.84020404567!2d2.075241250614233!3d41.35582687916529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4995cdcf4979d%3A0xf7993c3566e6151f!2sInstitut+Esteve+Terradas+i+Illa!5e0!3m2!1ses!2ses!4v1480618521975" id="iframe" frameborder="0" style="border:0" allowfullscreen></iframe></center>
            </div>
           
        </div>

@stop