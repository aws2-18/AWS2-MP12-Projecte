@extends('layout.masteradmin')
@section('content')
<div class="col-md-10 col-md-offset-1">
@include('partials._messages')
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
