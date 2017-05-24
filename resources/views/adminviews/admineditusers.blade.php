@extends('layout.masteradmin')
@section('content')
		<div class="row">
		<div class="col-md-8">
			<form method="POST" action="{{ route('admin.usuarios.update', $user->id) }}">
    			  <div class="form-group">
    			  <label><strong>Nombre</strong></label>
    			    <textarea type="text" class="form-control input-lg" id="name" name="name" rows="1" required style="resize:none;">{{ $user->name }}</textarea>
    			  </div>
    			  <div class="form-group">
    			  <label><strong>Email</strong></label>
     			   <textarea type="text" class="form-control input-lg" id="email" name="email" value="" rows="1">{{ $user->email }}</textarea>
   	  			 </div>
             <div class="form-group">
            <label><strong>Pais</strong></label>
             <textarea type="text" class="form-control input-lg" id="pais" name="pais" value="" rows="1">{{ $user->pais }}</textarea>
             </div>
             <div class="form-group">
            <label><strong>Provincia</strong></label>
             <textarea type="text" class="form-control input-lg" id="provincia" name="provincia" value="" rows="1">{{ $user->provincia }}</textarea>
             </div>
             <div class="form-group">
            <label><strong>Ciudad</strong></label>
             <textarea type="text" class="form-control input-lg" id="ciudad" name="ciudad" value="" rows="1">{{ $user->ciudad }}</textarea>
             </div>
             <div class="form-group">
            <label><strong>Direccion</strong></label>
             <textarea type="text" class="form-control input-lg" id="direccion" name="direccion" value="" rows="1">{{ $user->direccion }}</textarea>
             </div>
             <div class="form-group">
            <label><strong>CP</strong></label>
             <textarea type="text" class="form-control input-lg" id="cp" name="cp" value="" rows="1">{{ $user->cp }}</textarea>
             </div>
            

   		 </div>
    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Created at:</dt>
          <dd>{{ date('M j, Y h:i:sa', strtotime($user->created_at)) }}</dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Last updated:</dt>
          <dd>{{ date('M j, Y h:i:sa', strtotime($user->updated_at)) }}</dd>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
            <a href="{{ route('admin.usuarios.show', $user->id) }}" class="btn btn-danger btn-block">Cancel</a>
          </div>
          <div class="col-sm-6">
              <button type="submit" class="btn btn-success btn-block">Save Changes</button>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              {{ method_field('PUT') }}
       </form>﻿
	</div>



@endsection