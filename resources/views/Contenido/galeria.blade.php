@extends('layout.master')
@section('content')
<div class="row">
	<div class="col-md-12" style="color:white">
		<h1>Galerias</h1>
	</div>
</div>

<div class="row">

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
						<a href="{{url('galeria/imagenes/' . $gallery->id)}}">Ver</a>
						<a href="{{url('gallery/delete/' . $gallery->id)}}">Eliminar</a>  
						
						
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif 
	</div>



</div>

@stop
