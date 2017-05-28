@extends('layout.master')
@section('content')
<div id="reg#F52D2Distrocontenido">
	
	    <div class="row">
	      <div class="col-md-6" id="panelizquierdaregistro">

	        <p id="haymuchomas">¡HAY MUCHO MÁS EN PUVIK DE LO QUE CREES! </p>
	        <div class="col-md-4">
	        <p id="ventajas">Subir Videos</p>
	        </div>
	        <div class="col-md-4">
	        <p id="ventajas">Like/Dislike</p>
	        </div>
	        <div class="col-md-4">
	        <p id="ventajas">Crear galeria</p>
	        </div>
	        <div class="col-md-4">
	        <p id="ventajas">Perfil Propio</p>
	        </div>
	        <div class="col-md-4">
	        <p id="ventajas">Lorem Ipsum</p>
	        </div>
	        <div class="col-md-4">
	       	<p id="ventajas">Lorem Ipsum</p>
	        </div>

	      </div>
	      <div class="col-md-6">

	        <div class="panel panel-default" id="registropanel">
                <div class="panel-body">
                	<p id="registrate">Regístrate gratis</p>
                		<p id="experiencia">y mejora tu experiencia</p>
                	<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="name2" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Introduce tu nombre">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="email2" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Introduce el email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="password2" type="password" class="form-control" name="password" required placeholder="Introduce tu contraseña">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <input id="password-confirm2" type="password" class="form-control" name="password_confirmation" required placeholder="Confirma tu contraseña">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-registro">
                                    ¡Regístrate!
                                </button> 
                            </div>
                        </div>
                       	<p id="alregistrar">Al registrarte, aceptas nuestros Términos y Condiciones</p>
                    </form>

                </div>
             </div>

	      </div>
	    </div>
	
</div>
@stop