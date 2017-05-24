@extends('layout.master')
@section('content')
    <div class="row">
        <H1 id="white">Panel de Usuario</H1>
        <div id="derechaEdit" class="col-md-2"><button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/editar/usuario/{{$Usuario->id}}'"><span class="glyphicon glyphicon-pencil"></span>Editar Usuario</button> 
        </div> 
        <div id="derechaEdit" class="col-md-3"><button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/subirvideo/{{$Usuario->id}}'"><span class="glyphicon glyphicon-pencil"></span>Subir Video</button> 
        </div> 
            <div id="derechaEdit" class="col-md-3"><button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/gallery/list'"><span class="glyphicon glyphicon-pencil"></span>Crear Galeria</button> 
        </div> 
        <div class="col-md-12">
            <div class="well" style="margin-top:10px;display: inline-block;" >
                <div class="col-md-6">
                <dl class="dl-horizontal">
                    <dt style="align-content: left">Nombre:</dt>
                    <dd>{{$Usuario->name}}</dd> 
                </dl>
                <dl class="dl-horizontal">
                    <dt>Email:</dt>
                    <dd>{{$Usuario->email}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Pais: </dt>
                    <dd>{{$Usuario->pais}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Provincia: </dt>
                    <dd>{{$Usuario->provincia}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Ciudad: </dt>
                    <dd>{{$Usuario->ciudad}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Direccion: </dt>
                    <dd>{{$Usuario->direccion}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Codigo Postal: </dt>
                    <dd>{{$Usuario->cp}}</dd>
                </dl>
                </div>
                <div class="col-md-6">
                @if (Storage::disk('guardar')->has($Usuario->name . '-' . $Usuario->id . '.jpg'))
                <dl class="dl-horizontal">
                    <dd><img src="{{ route('account.image', ['filename' => $Usuario->name . '-' . $Usuario->id . '.jpg'])}}" alt="" class="img-responsive" width="100%" >

                    </dd>
                </dl>
                </div>
                <hr>
                @endif
            </div>


    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="col-md-6" style="color: white">
            <p><b>Nombre:</b></p>
            <p><b>Email:</b></p>
            <p><b>Pais:</b></p>
            <p><b>Provincia:</b></p>
            <p><b>Ciudad:</b></p>
            <p><b>Direccion:</b></p>
            <p><b>Codigo postal:</b></p>
        </div>  
        <div class="col-md-6" style="color: white; text-align: left;">
            <p><b>{{$Usuario->name}}</b></p>
            <p><b>{{$Usuario->email}}</b></p>
            <p><b>{{$Usuario->pais}}</b></p>
            <p><b>{{$Usuario->provincia}}</b></p>
            <p><b>{{$Usuario->ciudad}}</b></p>
            <p><b>{{$Usuario->direccion}}</b></p>
            <p><b>{{$Usuario->cp}}</b></p>
        </div>    
    </div>
                    <div class="col-md-6">
                @if (Storage::disk('guardar')->has($Usuario->name . '-' . $Usuario->id . '.jpg'))
                <dl class="dl-horizontal">
                    <dd><img src="{{ route('account.image', ['filename' => $Usuario->name . '-' . $Usuario->id . '.jpg'])}}" alt="" class="img-responsive" width="50%" >

                    </dd>
                </dl>
                </div>
                <hr>
                @endif

</div>
@endsection