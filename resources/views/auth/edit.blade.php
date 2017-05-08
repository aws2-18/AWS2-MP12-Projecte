@extends('layout.master')
@section('content')
    <div class="row">
    @include('partials._messages')
        <H1 id="white">Editar informacion Usuario</H1>
        <div id="derechaEdit">

        </form>
        </div> 
        <div class="col-md-6">
        <form action="{{url('editar/usuario/postEdit/')}}/{{$id}}" method="POST">
          {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class="form-group">
            <label id="white">Nombre</label>
            <input type="text" name="name" value="{{$Usuario->name}}" required>
            </div>
            <div>
            <label id="white">Email</label>
            <input type="text" name="email" value="{{$Usuario->email}}" required>
            </div>
            <div>
            <label id="white">Pais</label>
            <input type="text" name="pais" value="{{$Usuario->pais}}" required>
            </div>
            <div>
            <label id="white">Provincia</label>
            <input type="text" name="provincia" value="{{$Usuario->provincia}}" required>
            </div>
            <div>
            <label id="white">Ciudad</label>
            <input type="textarea" name="ciudad" value="{{$Usuario->ciudad}}" required>
            </div>
            <div>
            <label id="white">Direccion</label>
            <input type="text" name="direccion" value="{{$Usuario->direccion}}" required>
            </div>
            <div>
            <label id="white">Codigo Postal</label>
            <input type="number" name="cp" value="{{$Usuario->cp}}" required>
            </div>

            <input type="submit" value="Actualizar perfil" class="btn btn-primary">
        </form>
        <input type="button" onclick="window.location.href='{{ url('/usuario/' . $id=Auth::user()->id) }}'" value="Volver al perfil" class="btn btn-dangerous">

        </div>
        <div class="col-md-6">

        </div>

    </div>

@endsection