@extends('layout.masteradmin')
@section('content')
<div class="col-md-8 col-md-offset-2">
@include('partials._messages')
  <table class="table table-hover table-inverse">
    <thead>
      <tr>
        <th>Título</th>
        <th>Creador Id</th>
        <th>Fecha</th>
        <th><span class="glyphicon glyphicon-cog"></span></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($galerias as $key => $galeria)
        <tr>
          <th>{{$galeria->name}}</th>
          <td>{{$galeria->created_by}}</td>
          <td>{{ date('M j, Y', strtotime($galeria->created_at))}}</td>
          <td><a href="{{ route('admin.galerias.show', $galeria->id)}}" class="btn btn-info btn-sm">View</a> <a href="{{ route('admin.galerias.edit', $galeria->id)}}" class="btn btn-success btn-sm">Edit</a>
      @endforeach
      </tr>
    </tbody>
  </table>
</div>
<div class="col-md-8 col-md-offset-2">
  <a href="{{ route('admin.galerias.formupload')}}" class="btn btn-danger">Crear Galeria</a>
</div>
@stop