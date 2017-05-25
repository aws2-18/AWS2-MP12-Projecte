<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="{{ url('/assets/css/admin.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>


</style>
<div class="container">
<div class="row">
  <div class="col-sm-3">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand">Sidebar menu</span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="/admin">Panel</a></li>
            <li class="{{ Request::is('admin/videos') ? 'active' : '' }}"><a href="/admin/videos">Videos</a></li>
            <li class="{{ Request::is('admin/galerias') ? 'active' : '' }}"><a href="/admin/galerias">Galerias</a></li>
            <li class="{{ Request::is('admin/usuarios') ? 'active' : '' }}"><a href="/admin/usuarios">Usuarios</a></li>

            <li><a href="{{ route('admin.logout')}}">Logout</a></li>
          </ul>
          <ul class="nav navbar-nav">
          <li><p>@component('components.who')</p></li>
               @endcomponent
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
</div>
</div>