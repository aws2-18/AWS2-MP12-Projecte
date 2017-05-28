@extends('layout.masteradmin')
@section('content')
		<div class="row">
		<div class="col-md-6">
			<form method="POST" action="{{ route('admin.usuarios.update', $user->id) }}">
    			  <div class="form-group">
    			  <label><strong>Nombre</strong></label>
    			    <textarea type="text" class="form-control form-control-sm" id="name" name="name" rows="1" required style="resize:none;">{{ $user->name }}</textarea>
    			  </div>
    			  <div class="form-group">
    			  <label><strong>Email</strong></label>
     			   <textarea type="text" class="form-control form-control-sm" id="email" name="email" value="" rows="1">{{ $user->email }}</textarea>
   	  			 </div>
             <div class="form-group">
            <label><strong>País</strong></label>
             <textarea type="text" class="form-control form-control-sm" id="pais" name="pais" value="" rows="1">{{ $user->pais }}</textarea>
             </div>
             <div class="form-group">
            <label><strong>Provincia</strong></label>
             <textarea type="text" class="form-control form-control-sm" id="provincia" name="provincia" value="" rows="1">{{ $user->provincia }}</textarea>
             </div>
             <div class="form-group">
            <label><strong>Ciudad</strong></label>
             <textarea type="text" class="form-control form-control-sm" id="ciudad" name="ciudad" value="" rows="1">{{ $user->ciudad }}</textarea>
             </div>
             <div class="form-group">
            <label><strong>Dirección</strong></label>
             <textarea type="text" class="form-control form-control-sm" id="direccion" name="direccion" value="" rows="1">{{ $user->direccion }}</textarea>
             </div>
             <div class="form-group">
            <label><strong>CP</strong></label>
             <textarea type="text" class="form-control form-control-sm" id="cp" name="cp" value="" rows="1">{{ $user->cp }}</textarea>
             </div>
   	</div>

    <div class="col-md-4">
      <div class="well">
        <dl class="dl-vertical" style="text-align: center;">
          <dt>Creado el:</dt>
          <dd>{{ date('M j, Y h:i:s a', strtotime($user->created_at)) }}</dd>
        </dl>

        <dl class="dl-vertical" style="text-align: center;">
          <dt>Última actualización:</dt>
          <dd>{{ date('M j, Y h:i:s a', strtotime($user->updated_at)) }}</dd>
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
          </div>
        </div> 
       </form>﻿
	</div>

@endsection