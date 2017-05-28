@extends('layout.master')
@section('content')
   <center> <div class="row">
        <h1 id="panelusuarioletra">Panel de Usuario</h1>
        <div id="botonperfil" class="col-md-5"><button type="button" class="btn btn-info" onclick="location.href='{{url('/')}}/editar/usuario/{{$Usuario->id}}'"><span class="glyphicon glyphicon-user"></span> Editar Usuario</button> 
        </div> 
        <div id="botonperfil" class="col-md-2"><button type="button" class="btn btn-success" onclick="location.href='{{url('/')}}/subirvideo/{{$Usuario->id}}'"><span class="glyphicon glyphicon-facetime-video"></span> Subir Video</button> 
        </div> 
            <div id="botonperfil" class="col-md-5"><button type="button" class="btn btn-success" onclick="location.href='{{url('/')}}/gallery/list'"><span class="glyphicon glyphicon-picture"></span> Crear Galeria</button> 
        </div> 
        <div class="col-md-12" id="paneluser">
            <div class="well" style="margin-top:10px;display: inline-block;" >
                <div id="usupanel" class="col-md-6">
                <dl class="dl-horizontal">
                    <dt style="align-content: left">Nombre:</dt>
                    <dd>{{$Usuario->name}}</dd> 
                </dl>
                <dl class="dl-horizontal">
                    <dt id="">Email:</dt>
                    <dd>{{$Usuario->email}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>País: </dt>
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
                    <dt>Dirección: </dt>
                    <dd>{{$Usuario->direccion}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Código Postal: </dt>
                    <dd>{{$Usuario->cp}}</dd>
                </dl>
                </div>
                <div class="col-md-6">
                @if (Storage::disk('guardar')->has($Usuario->name . '-' . $Usuario->id . '.jpg'))
                <dl class="dl-horizontal">
                    <dd id="imageusu"><img src="{{ route('account.image', ['filename' => $Usuario->name . '-' . $Usuario->id . '.jpg'])}}" alt="" class="img-thumbnail" width="100%" >

                    </dd>
                </dl>
                </div>
                <hr>
                @else

                @endif
            </div>

    </div>
</div>
</center>
</div>
@endsection