@extends('layout.masteradmin')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h3>Crear nueva Galeria</h3>
    <hr>
    <form method="POST" action="{{ route('admin.galerias.store') }}" enctype="multipart/form-data">
      <div class="form-group">
        <label name="title">Título:</label>
        <input type="text" id="titulo" name="titulo" class="form-control form-control-sm">
        <label name="body">Autor:</label>
      	<input type="text" name="autor" id="autor" value="{{$id = Auth::user()->id}}" class="form-control form-control-sm"><br>
 		    <input type="submit" value="Crear nueva galeria" class="btn btn-danger btn-md">
  	    <input type="hidden" name="_token" value="{{ Session::token() }}">
      </div>
    </form>
  </div>
</div>﻿
@endsection