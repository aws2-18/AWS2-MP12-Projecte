@extends('layout.master')
@section('content')
<div class="row">
	<div class="col-md-12" style="color:white">
		<h1>Mis Galerias</h1>
	</div>
</div>

<div class="row">
	@include('partials._messages')
	<div class="col-md-8" style="color:white">
		@if ($galleries->count() > 0)
		<table class="table table-striped table-bordered table-responsive" style="color: white">
			<thead>
				<tr class="info" style="color:black">
					<th>Nombre de la galeria</th>
					<th></th>
				</tr>
			</thead>
			<tbody style="color: black">
				@foreach($galleries as $gallery)
				<tr>
					<td>{{$gallery->name}}
						<span class="pull-right">
							{{$gallery->images()->count()}}
						</span>
					</td>
					<td>
						<a href="{{url('gallery/view/' . $gallery->id)}}">Ver</a> /
						<a href="{{url('gallery/delete/' . $gallery->id)}}" onclick="return ConfirmarBorrar()">Eliminar</a> 
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif 
		<input style="color: black" type="button" onclick="window.location.href='{{ url('/usuario/' . $id=Auth::user()->id) }}'" value="Volver al perfil" class="btn btn-dangerous">
	</div>
	
	<div class="col-md-4">
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<form class="form" method="POST" action="{{url('gallery/save')}}">

			<input type="hidden" name="_token" value="{{ csrf_token()}}">

			<div class="form_group">
				<input type="text" name="gallery_name" id="gallery_name" placeholder="Nombre de la galeria" class="form-control" value="{{old('gallery_name')}}" />

			</div><br>
			<button class="btn btn-primary">Guardar</button>
		</form>
		
	</div>
</div>
	<script>
		function ConfirmarBorrar(){

			var x = confirm("¿Estas seguro que quieres eliminar la galeria?");
			if(x)
				return true;
			else 
				return false;
		}
		
	</script>

@stop
