 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

</style>
<nav class="navbar navbar-inverse role="navigation" id="navbar1">
        <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="navbar-brand">
                            <p id="nav">Multimedia Center</p>
                            </a>   
                        </li>          
                    </ul>       
            </div> 
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="navbar-brand">
                            <p id="nav">Logo</p>
                            </a>   
                        </li>   
                        <li>
                    	<form class="form-inline navbar-form pull-right">
                    	<input class="form-control" type="text" placeholder="Search" id="search">
                    	<button class="btn btn-success-outline" type="submit">Search </button>
                    	</form>
                   	</li>       
                    </ul>   
                    <ul class="nav navbar-nav navbar-right">
                    
                   	<li>
                   		<a class="navbar-brand" data-toggle="modal" data-target="#myModal">
                   		<p id="nav2">Iniciar sesion</p></a>
                           <!-- Modal -->
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
                   	</li>

                   	<li>
                   		<a class="navbar-brand">
                   		<p id="nav2">Registro</p></a>
                   	</li>
            </div> 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
                    <ul class="nav navbar-nav">
                        <li id="menu">
                            <a class="navbar-brand">
                            <p id="nav">
                            INICIO
                            </p>
                            </a>   
                        </li>
                        <li id="menu">
                        	<a class="navbar-brand">
                        	<p id="nav">
                        	VIDEOS
                        	</p>
                        	</a>
                        </li>
                        <li id="menu">
                        	<a class="navbar-brand">
                        	<p id="nav">CATEGORIAS
                        	</p></a>
                        </li>
                        <li id="menu">
                        	<a class="navbar-brand">
                        	<p id="nav">STREAMING</p></a>
                        </li>          
                    </ul>   
                    <ul class="nav navbar-nav navbar-right">
                    <li>
                    	<a class="navbar-brand"><p id="nav">FOTOS Y GIF'S</p></a>
                   	</li>

        </div>
        </div>
    </nav>
      <div class="footer">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-2">
            <h3>Informacion</h3><br>
            <p>Términos y Condiciones<p>
            <p>Política de privacidad</p>
            <p>DMCA</p>
            <p>2257</p><br> 
        </div>
        <div class="col-md-1">
            
        </div>
                <div class="col-md-2">
            <h3>Trabaja con nosotros</h3>
            <p>Socios de conteido</p>
            <p>Webmasters</p>
            <p>Model Payment Program</p>
            <p>Prensa</p>
        </div>
        <div class="col-md-1">
            
        </div>
        <div class="col-md-2">
            <h3>Apoyo y ayuda</h3>
            <p>Preguntas frecuentes</p>
            <p>Contactar soporte</p>
            <p>Foro de retroalimentación</p>
            <p>Mapa de sitio</p>
        </div>
        <div class="col-md-1">
            
        </div>
        <div class="col-md-2">
            <h3>Descubre</h3>
            <p>Blog de ...</p>
            <p>Perspectiva de Blog</p>
            <p>Centro de Salud Sexual</p>
            <p>Móvil/Tableta</p>
            <p>Más</p>
        </div>
        <div class="col-md-1">
            
        </div>
    </div>  
<hr>
    
