@extends('layout.master')
@section('content')
    <div class="row">
    @include('partials._messages')
        <H1 id="white">Editar informacion Usuario</H1>
 
        <div class="col-md-6">
        <form action="{{url('editar/usuario/postEdit/')}}/{{$id}}" method="POST" enctype="multipart/form-data">
          {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class="form-group">
            <label id="white">Nombre</label>
            <input type="text" name="name" value="{{$Usuario->name}}" id="name3" required>
            </div>
            <div>
            <label id="white">Email</label>
            <input type="text" name="email" value="{{$Usuario->email}}" id="email3" required>
            </div>
            <div>
            <label id="white">Pais</label>
            <input type="text" name="pais" value="{{$Usuario->pais}}" id="pais3" required>
            </div>
            <div>
            <label id="white">Provincia</label>
            <input type="text" name="provincia" value="{{$Usuario->provincia}}" id="provincia3" required>
            </div>
            <div>
            <label id="white">Ciudad</label>
            <input type="textarea" name="ciudad" value="{{$Usuario->ciudad}}" id="ciudad3" required>
            </div>
            <div>
            <label id="white">Direccion</label>
            <input type="text" name="direccion" value="{{$Usuario->direccion}}" id="direccion3" required>
            </div>
            <div>
            <label id="white">Codigo Postal</label>
            <input type="number" name="cp" value="{{$Usuario->cp}}" id="cp3" required>
            </div>
            <div>
            <label id="white">Seleccionar archivo</label>
            <input type="file" name="imagen" value="{{$Usuario->imagen}}" required id="white">
            </div>
            <br>
            <input type="submit" value="Actualizar perfil" class="btn btn-cssshow">
        </form>
        
        <input type="button" onclick="window.location.href='{{ url('/usuario/' . $id=Auth::user()->id) }}'" value="Volver al perfil" class="btn btn-dangerous">

        </div>
        <!--
        <div class="col-md-6">
            <div class="col-lg-offset-4 col-lg-4">
            <form action="/pepito" enctype="multipart/form-data" method="post">
            {{csrf_field()}}
                <input type="file" name="image" id="white">
                <br>
                <input type="submit" name="Upload">
            </form> 
            </div>
        </div>
    -->
    </div>

@endsection