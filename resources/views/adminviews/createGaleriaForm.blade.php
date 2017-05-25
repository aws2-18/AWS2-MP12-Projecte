@extends('layout.masteradmin')
@section('content')
<div class="row">
  <div class="col-md-7">
    <h1>Create new user</h1>
    <hr>
    <form method="POST" action="{{ route('admin.galerias.store') }}" enctype="multipart/form-data">
      <div class="form-group">
        <label name="title">Titulo:</label>
        <input id="titulo" name="titulo" class="form-control">
         <label name="body">Autor:</label>
      	 <input name="autor" id="autor" value="{{$id = Auth::user()->id}}" class="form-control">
 		 <input type="submit" value="Crear nueva galeria" class="btn btn-success btn-lg btn-block">
  	    <input type="hidden" name="_token" value="{{ Session::token() }}">

      </div>
    
    </form>
  </div>
</div>﻿


@endsection