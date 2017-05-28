@extends('layout.masteradmin')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h1>Create new user</h1>
    <hr>
    <form method="POST" action="{{ route('admin.usuarios.store') }}" enctype="multipart/form-data">
      <div class="form-group">
        <label name="title">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control form-control-sm">
        <label name="body">Email:</label>
      	<input type="email" name="email" id="email"  class="form-control form-control-sm">
        <label name="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control"><br>
 		    <input type="submit" value="Crear Usuario" class="btn btn-danger btn-md">
  	    <input type="hidden" name="_token" value="{{ Session::token() }}">
      </div>
    </form>
  </div>
</div>﻿
@endsection