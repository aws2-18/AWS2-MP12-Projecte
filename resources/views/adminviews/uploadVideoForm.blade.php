@extends('layout.masteradmin')
@section('content')
<div class="row">
  <div class="col-md-7">
    <h1>Upload new video</h1>
    <hr>
    <form method="POST" action="{{ route('admin.videos.store') }}" enctype="multipart/form-data">
      <div class="form-group">
        <label name="title">Titulo:</label>
        <input id="titulo" name="titulo" class="form-control">
         <label name="body">Video:</label>
      	 <input type="file" name="video" id="video"  class="form-control">Seleccionar el archivo
 		 <input type="submit" value="Subir video" class="btn btn-success btn-lg btn-block">
  	    <input type="hidden" name="_token" value="{{ Session::token() }}">

      </div>
    
    </form>
  </div>
</div>﻿


@endsection