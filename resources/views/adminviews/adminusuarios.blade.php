@extends('layout.masteradmin')
@section('content')
@include('partials._messages')
<!--
  <div class="col-sm-12">
   <table class="table">
   	<thread>
   		<th>Nombre</th>
   		<th>Email</th>
   		<th>Pais</th>
   		<th>Provincia</th>
      <th>Ciudad</th>
      <th>Direccion</th>
      <th>Codigo Postal</th>
      <th>Creado el</th>
      <th>Funciones Admin</th>
   	</thread>

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
    		<td><a href="{{ route('admin.usuarios.show', $usuario->id)}}" class="btn btn-default">View</a> <a href="{{ route('admin.usuarios.edit', $usuario->id)}}" class="btn btn-default">Edit</a>
    	
    @endforeach
    </tbody>
    </table>
  </div>
  <div class="col-sm-2">
  	<a href="{{ route('admin.usuarios.formupload')}}" class="btn btn-success">Create new user</a>
  </div>
-->
<div class="col-md-12">
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