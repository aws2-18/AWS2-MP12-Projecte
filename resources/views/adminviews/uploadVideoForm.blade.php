@extends('layout.masteradmin')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h3>Subir nuevo vídeo</h3>
    <hr>
    <form method="POST" action="{{ route('admin.videos.store') }}" enctype="multipart/form-data">
      <div class="form-group">
        <label name="title">Título:</label>
        <input type="text" id="titulo" name="titulo" class="form-control form-control-sm">
        <label name="body">Vídeo:</label>
      	<input type="file" name="video" id="video"  class="form-control-file" aria-describedby="fileHelp"><br>
 		    <input type="submit" value="Subir vídeo" class="btn btn-danger btn-md">
  	    <input type="hidden" name="_token" value="{{ Session::token() }}">
      </div>
    </form>
  </div>
</div>﻿
@endsection