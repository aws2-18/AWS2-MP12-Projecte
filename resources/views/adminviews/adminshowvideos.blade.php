@extends('layout.masteradmin')
@section('content')
<div class="row">
    @include('partials._messages')

		<div class="col-md-8">

		           <h1>Titulo: {{ $video->titulo }}</h1> 

			<p class="lead"><video width="320" height="240" controls>
                <source src="/videos/{{$video->url}}" type="video/mp4">
             Your browser does not support the video tag.
            </video></p>
            <p class="lead">Usuario: {{ $video->usuario}}</h3></p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($video->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
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