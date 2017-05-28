@extends('layout.masteradmin')
@section('content')
@include('partials._messages')
<!--
  <div class="col-sm-10">
   <table class="table">
   	<thread>
   		<th>Titulo</th>
   		<th>Usuario</th>
   		<th>Creado el</th>
   		<th>Funciones Admin</th>
   	</thread>

   	<tbody>
    @foreach ($videos as $key => $video)

    	<tr>
    		<th>{{$video->titulo}}</th>
    		<td>{{$video->usuario}}</td>
    		<td>{{ date('M j, Y', strtotime($video->created_at))}}</td>
    		<td><a href="{{ route('admin.videos.show', $video->id)}}" class="btn btn-default">View</a> <a href="{{ route('admin.videos.edit', $video->id)}}" class="btn btn-default">Edit</a>
    	
    @endforeach
    </tbody>
    </table>
  </div>
  <div class="col-sm-2">
  	<a href="{{ route('admin.videos.formupload')}}" class="btn btn-success">Upload Video</a>
  </div>

-->
<div class="col-md-10 col-md-offset-1">
  <table class="table table-hover table-inverse">
    <thead>
      <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Usuario</th>
        <th>Fecha</th>
        <th><span class="glyphicon glyphicon-cog"></span></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($videos as $key => $video)
      <tr>
        <th>{{$video->id}}</th>
        <th>{{$video->titulo}}</th>
        <td>{{$video->usuario}}</td>
        <td>{{ date('M j, Y', strtotime($video->created_at))}}</td>
        <td><a href="{{ route('admin.videos.show', $video->id)}}" class="btn btn-info btn-sm">View</a> <a href="{{ route('admin.videos.edit', $video->id)}}" class="btn btn-success btn-sm">Edit</a></td> 
      @endforeach
      </tr>
    </tbody>
  </table>
</div>
<div class="col-md-10 col-md-offset-1">
  <a href="{{ route('admin.videos.formupload')}}" class="btn btn-danger">Subir Vídeo</a>
</div>
@stop
