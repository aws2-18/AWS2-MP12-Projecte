<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
  <script type="text/javascript">
    $(document).ready(function() {   
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });
  </script>
  </head>
<style>

</style>

<div id="header">
<header role="banner" class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    </div>
    <div class="navbar-inverse side-collapse in">
      <nav role="navigation" class="navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="#Home">Multimedia Center</a></li>

                    </li>
            </ul>
      </nav>
          <nav role="navigation" class="navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#Home">Logo</a></li>
              <li>
                <form class="form-inline navbar-form pull-right">
                  <input class="form-control" type="text" placeholder="Search" id="search">
                  <button class="btn btn-success-outline" type="submit">Search </button>
                </form>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                          <li><a class="navbar-brand" data-toggle="modal" data-target="#myModal">
                <p id="nav2">Iniciar sesion</p></a>
                  <!-- MODAL -->
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
                      <li><a class="navbar-brand"><p id="nav2">Registro</p></a>
                      </li>
            </ul>
          </nav>
           <nav role="navigation" class="navbar-collapse">
             <ul class="nav navbar-nav">
              <li><a href="#Home">INICIO</a></li>
              <li><a href="#Home">VIDEOS</a></li>
              <li><a href="#Home">CATEGORIAS</a></li>
              <li><a href="#Home">STREAMING</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#Home">FOTOS Y GIF'S</a></li>
            </ul>
          </nav>

        </div>
      </div>
</header>
</div>



<div class="container side-collapse-container">
  <div class="row">
    <h1></h1>
    <p>This is a side opening nav demonstration</p>
    <p>Make your browser smaller and the top menu wil become into a lateral slider menu</p>
  </div>
</div>

<div id="wrapper">
  <div id="footer">
    <div class="footerFloat">
      <h4>Información</h4>
      <p>Terminos y condiciones</p>
      <p>Política de privacidad</p>
      <p>DMCA</p>
      <p>2257</p>
    </div>
    <div class="footerFloat">
      <h4>Trabaja con nosotros</h4>
      <p>Terminos y condiciones</p>
      <p>Política de privacidad</p>
      <p>DMCA</p>
      <p>2257</p>
    </div>
    <div class="footerFloat">
      <h4>Apoyo y ayuda</h4>
      <p>Terminos y condiciones</p>
      <p>Política de privacidad</p>
      <p>DMCA</p>
      <p>2257</p>
    </div>
    <div class="footerFloat">
      <h4>Descubre</h4>
      <p>Terminos y condiciones</p>
      <p>Política de privacidad</p>
      <p>DMCA</p>
      <p>2257</p>
    </div>
  </div>
</div> 


