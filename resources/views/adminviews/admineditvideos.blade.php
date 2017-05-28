@extends('layout.masteradmin')
@section('content')
		<div class="row">
		<div class="col-md-6">
			<form method="POST" action="{{ route('admin.videos.update', $video->id) }}">
    			  <div class="form-group">
    			  <label><strong>Titulo</strong></label>
    			    <textarea type="text" class="form-control form-control-sm" id="titulo" name="titulo" rows="1" required style="resize:none;">{{ $video->titulo }}</textarea>
    			  </div>
    			  <div class="form-group">
    			  <label><strong>Usuario</strong></label>
     			   <textarea type="text" class="form-control form-control-sm" id="usuario" name="usuario" disabled value="{{$video->usuario}}" rows="1">{{ $video->usuario }}</textarea>
   	  			 </div>
   	</div>
    <div class="col-md-4">
      <div class="well">
        <dl class="dl-vertical" style="text-align: center;">
          <dt>Creado el:</dt>
          <dd>{{ date('M j, Y h:i:sa', strtotime($video->created_at)) }}</dd>
        </dl>

        <dl class="dl-vertical" style="text-align: center;">
          <dt>Última actualización:</dt>
          <dd>{{ date('M j, Y h:i:sa', strtotime($video->updated_at)) }}</dd>
        </dl>
        <hr>
        <div class="row" style="text-align: center;">
          <div class="col-sm-6">
            <a href="{{ route('admin.videos.show', $video->id) }}" class="btn btn-danger btn-block">Cancel</a>
          </div>
          <div class="col-sm-6">
              <button type="submit" class="btn btn-success btn-block">Save Changes</button>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              {{ method_field('PUT') }}
          </div>
        </div>      
       </form>﻿
	</div>
@endsection