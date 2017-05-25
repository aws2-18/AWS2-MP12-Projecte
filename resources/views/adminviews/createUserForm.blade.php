@extends('layout.masteradmin')
@section('content')
<div class="row">
  <div class="col-md-7">
    <h1>Create new user</h1>
    <hr>
    <form method="POST" action="{{ route('admin.usuarios.store') }}" enctype="multipart/form-data">
      <div class="form-group">
        <label name="title">Nombre:</label>
        <input id="nombre" name="nombre" class="form-control">
         <label name="body">Email:</label>
      	 <input type="email" name="email" id="email"  class="form-control">
         <label name="password">Password:</label>
         <input type="password" name="password" id="password" class="form-control">
 		 <input type="submit" value="Crear nuevo usuario" class="btn btn-success btn-lg btn-block">
  	    <input type="hidden" name="_token" value="{{ Session::token() }}">

      </div>
    
    </form>
  </div>
</div>﻿


@endsection