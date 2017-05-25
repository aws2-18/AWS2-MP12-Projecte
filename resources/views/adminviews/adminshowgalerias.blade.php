@extends('layout.masteradmin')
@section('content')
<div class="row">
    @include('partials._messages')

		<div class="col-md-8">

		           <h1>Titulo: {{ $gallery->name }}</h1> 

	
            <p class="lead">Usuario: {{ $gallery->created_by}}</h3></p>
             <p class="lead">Usuario: {{ $gallery->published}}</h3></p>

		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($gallery->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($gallery->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">

						
					<a href="{{ route('admin.galerias.edit', $gallery->id)}}" class="btn btn-primary btn-block">Edit</a>
					</div>
					<div class="col-sm-6">
						<form method="POST" action="{{route('admin.galerias.destroy',$gallery->id)}}" onsubmit="return ConfirmarBorrar()">
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

			var x = confirm("¿Estas seguro de borrar esta galeria?");
			if(x)
				return true;
			else 
				return false;
		}
	</script>



@endsection