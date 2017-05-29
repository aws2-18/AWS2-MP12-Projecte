@extends('layout.masteradmin')
@section('content')
<div class="row">
		<div class="col-md-6">
	    @include('partials._messages')
		    <h3>Titulo: {{ $video->titulo }}</h3> 
		    <h3>Usuario: {{ $video->usuario}}</h3>

			<p class="lead"><video width="320" height="240" controls>
                <source src="/videos/{{$video->url}}" type="video/mp4">
             Your browser does not support the video tag.
            </video></p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-vertical" style="text-align: center;">
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($video->created_at)) }}</dd>
				</dl>

				<dl class="dl-vertical" style="text-align: center;">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($video->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">

					<a href="{{ route('admin.videos.edit', $video->id)}}" class="btn btn-primary btn-block">Edit</a>
					</div>
					<div class="col-sm-6">
						<form method="POST" action="{{route('admin.videos.destroy',$video->id)}}" onsubmit="return ConfirmarBorrar()">
						<input type="submit" value="Delete" class="btn btn-danger btn-block">
						<input type="hidden" name="_token" value="{{Session::token()}}">
						{{method_field('DELETE')}}
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

	<script>
		function ConfirmarBorrar(){

			var x = confirm("¿Estas seguro de borrar este video?");
			if(x)
				return true;
			else 
				return false;
		}
	</script>

@endsection