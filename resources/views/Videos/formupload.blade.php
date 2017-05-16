@extends('layout.master')
@section('content')
    <div class="row">
        <H1 id="white">Panel de Usuario</H1>
        <div id="derechaEdit" class="col-md-2"><button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/editar/usuario/{{$id = Auth::user()->id}}'"><span class="glyphicon glyphicon-pencil"></span>Editar Usuario</button> 
        </div> 
        <div id="derechaEdit" class="col-md-3"><button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/subirvideo'"><span class="glyphicon glyphicon-pencil"></span>Subir Video</button> 
        </div> 
        <div class="col-md-12">
            <form action="{{url('video/postUpload/')}}/{{$id}}}}" method="POST" enctype="multipart/form-data">
                {{method_field('PUT')}}
                {{ csrf_field() }}
                <div>
                <label id="white">Titulo</label>
                <input type="text" name="title">
                </div>
                <div>
                <label id="white">Seleccionar archivo</label>
                <input type="file" name="video" required id="white">
                </div>
                
                <input type="submit" value="Subir video" class="btn btn-primary">
             </form>
        </div>
    </div>
@endsection