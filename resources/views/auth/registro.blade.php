@extends('layout.master')
@section('content')
<div id="registrocontenido">
	
	    <div class="row">
	      <div class="col-md-6">
	        Level 2: .col-md-6
	      </div>
	      <div class="col-md-6">
	        Level 2: .col-md-6

	        <div class="panel panel-default">
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
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
             </div>

	      </div>
	    </div>
	
</div>
@stop