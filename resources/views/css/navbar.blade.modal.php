                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content" id="content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                 <center><h3 id="conolog">Conectarse o registrarse</h3></center>

                                </div>
                               <div class="modal-body">
                             <div class="col-md-8">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Introduce el e-mail" required autofocus>

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control" name="password" required placeholder="Introduce tu contraseña">

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <div class="checkbox" id="remember">
                                                        <label>
                                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame en este equipo <br>
                                                            (No recomendado en ordenadores públicos o compartidos)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-8">
                                                    <button type="submit" class="btn btn-ttc" id="iniciarsesion">
                                                        Iniciar sesión
                                                    </button>
                                                    <br>
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        <p id="remember2">¿Has olvidado tu contraseña?</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                 </div>

                             </div>
                             <div class="col-md-4">
                                
                                    
                                    <div class="panel-body" id="panelderecha">
                                        
                                        <div id="supreg">
                                        ¿No eres miembro gratuito aún?
                                            <div id="reginfo">
                                            <p>Esto es lo que se esta perdiendo! </p>
                                            <ul>

                                            <li class="img"><img src="{{url('/img/tick.png')}}">Perfil propio</li>
                                            <li class="img"><img src="{{url('/img/tick.png')}}">Puntuar videos</li>
                                            <li class="img"><img src="{{url('/img/tick.png')}}">Comentar videos</li>
                                                <li class="img"><img src="{{url('/img/tick.png')}}">Acceder a Streaming</li>
                                                
                                                
                                                
                                                
                                            </ul>
                                                <p id="muchomas">Y mucho más!</p>

                                             <button type="submit" class="btn btn-ttb" id="registro">
                                                        Regístrate
                                                    </button>
                                            </div>
                                        </div>

                                    </div>

                             </div>

                            </div>
                            <div class="modal-footer">
                              
                            </div>
        
                          </div>
                          
                        </div>
                      </div>