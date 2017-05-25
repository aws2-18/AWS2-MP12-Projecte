@extends('layout.masteradmin')
@section('content')
    @include('partials._messages')

  <div class="col-sm-10">
   <table class="table">
   	<thread>
   		<th>Titulo</th>
   		<th>Creado Por</th>
   		<th>Creado el</th>
   		<th>Funciones Admin</th>
   	</thread>

   	<tbody>
    @foreach ($galerias as $key => $galeria)

    	<tr>
    		<th>{{$galeria->name}}</th>
    		<td>{{$galeria->created_by}}</td>
    		<td>{{ date('M j, Y', strtotime($galeria->created_at))}}</td>
    		<td><a href="{{ route('admin.galerias.show', $galeria->id)}}" class="btn btn-default">View</a> <a href="{{ route('admin.galerias.edit', $galeria->id)}}" class="btn btn-default">Edit</a>
    	
    @endforeach
    </tbody>
    </table>
  </div>
  <div class="col-sm-2">
  	<a href="{{ route('admin.galerias.formupload')}}" class="btn btn-success">Crear galeria</a>
  </div>
@stop