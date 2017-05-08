@extends('layout.master')
@section('content')
    <div class="row">
        <H1 id="white">Panel de Usuario</H1>
        <div id="derechaEdit"><button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/editar/usuario/{{$Usuario->id}}'"><span class="glyphicon glyphicon-pencil"></span>Editar Usuario</button> </div> 
        <div class="col-md-12">
            <div class="well" style="margin-top:10px">
                <div class="col-md-11">
                <dl class="dl-horizontal">
                    <dt>Nombre:</dt>
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
                <dl class="dl-horizontal">
                    <dd><img src="/img/{{Auth::user()->imagen}}" width="200"></dd>
                </dl>
                <hr>

            </div>

        </div>

    </div>

@endsection