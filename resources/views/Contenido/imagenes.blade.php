@extends('layout.master')
@section('content')

<div class="row">
	<div class="col-md-12" style="color:white">
		<h1>{{$gallery->name}}</h1>
	</div>
</div><br>

<div class="row" id="images">
	<div class="col-md-12">
		<div id="gallery-images">
			<ul>
				@foreach ($gallery->images as $image)
				<li>
					<a href="{{ url($image->file_path) }}" data-lightbox="mygallery">
						<img src="{{ url('/gallery/images/thumbs/' . $image->file_name) }}">
					</a>	
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<a href="{{url('/galeria')}}" class="btn btn-primary">Atrás</a>
	</div>
</div>

@stop
