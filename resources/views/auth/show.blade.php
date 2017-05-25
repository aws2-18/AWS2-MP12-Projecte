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
                @else

                @endif
            </div>

    </div>
</div>
</div>
@endsection