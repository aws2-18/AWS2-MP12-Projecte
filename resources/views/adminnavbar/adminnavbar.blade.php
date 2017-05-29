<title>Admin Puvik</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="{{ url('/assets/css/admin.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#stats{
  
  border: 2px solid black;
  background-color: white;
  text-align: center;
}
#stats{
  
  margin-bottom: 5%;
}
.navbar-brand {
  padding: 0px;
}
.navbar-brand>img {
  height: 100%;
  padding: 5%;
  width: auto;
}


</style>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/admin"><img src="/images/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="/admin"><span class="glyphicon glyphicon-list-alt"></span> Panel</a></li>
      <li class="{{ Request::is('admin/videos') ? 'active' : '' }}"><a href="/admin/videos"><span class="glyphicon glyphicon-facetime-video"></span> Videos</a></li>
      <li class="{{ Request::is('admin/galerias') ? 'active' : '' }}"><a href="/admin/galerias"><span class="glyphicon glyphicon-picture"></span>  Galerias</a></li>
      <li class="{{ Request::is('admin/usuarios') ? 'active' : '' }}"><a href="/admin/usuarios"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('admin.logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="caja" class="col-md-12">
  <div id="stats" class="col-md-2 col-md-offset-5">
    <li>
      <p>@component('components.who')</p>
    </li>
    @endcomponent
  </div>
</div>