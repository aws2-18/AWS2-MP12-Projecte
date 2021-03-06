@extends('layout.masteradmin')
@section('content')
<div class="col-md-12">
@include('partials._messages')
  <table class="table table-hover table-inverse">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>País</th>
        <th>Provincia</th>
        <th>Ciudad</th>
        <th>Dirección</th>
        <th>Codigo Postal</th>
        <th>Fecha</th>
        <th><span class="glyphicon glyphicon-cog"></span></th>
      </tr>
    </thead>
    <tbody>
     @foreach ($usuarios as $key => $usuario)
      <tr>
        <th>{{$usuario->name}}</th>
        <td>{{$usuario->email}}</td>
        <td>{{$usuario->pais}}</td>
        <td>{{$usuario->provincia}}</td>
        <td>{{$usuario->ciudad}}</td>
        <td>{{$usuario->direccion}}</td>
        <td>{{$usuario->cp}}</td>
        <td>{{ date('M j, Y', strtotime($usuario->created_at))}}</td>
        <td><a href="{{ route('admin.usuarios.show', $usuario->id)}}" class="btn btn-info btn-sm">View</a> <a href="{{ route('admin.usuarios.edit', $usuario->id)}}" class="btn btn-success btn-sm">Edit</a>
    @endforeach
      </tr>
    </tbody>
  </table>
</div>
<div class="col-md-3">
  <a href="{{ route('admin.usuarios.formupload')}}" class="btn btn-danger">Crear Usuario</a>
</div>
@stop