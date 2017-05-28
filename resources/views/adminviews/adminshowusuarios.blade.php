@extends('layout.masteradmin')
@section('content')
<div class="row">
    @include('partials._messages')

		<div class="col-md-8">

			
            <p class="lead">Nombre: {{ $user->name}}</p>
            <p class="lead">Email: {{ $user->email}}</p>
            <p class="lead">Pais: {{ $user->pais}}</p>
            <p class="lead">Provincia: {{ $user->provincia}}</p>
            <p class="lead">Ciudad: {{ $user->ciudad}}</p>
            <p class="lead">Direccion: {{ $user->direccion}}</p>
            <p class="lead">Codigo Postal: {{ $user->cp}}</p>
            @if (Storage::disk('guardar')->has($user->name . '-' . $user->id . '.jpg'))

            <img src="{{ route('account.image', ['filename' => $user->name . '-' . $user->id . '.jpg'])}}" alt="" class="img-responsive">
            @else
            <p class="lead">Imagen: {{$user->imagen}}</p>
            @endif
      		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Create At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($user->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($user->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">

						
					<a href="{{ route('admin.usuarios.edit', $user->id)}}" class="btn btn-primary btn-block">Edit</a>
					</div>
					<div class="col-sm-6">
						<form method="POST" action="{{route('admin.usuarios.destroy',$user->id)}}" onsubmit="return ConfirmarBorrar()">
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

			var x = confirm("¿Estas seguro de borrar este usuario?");
			if(x)
				return true;
			else 
				return false;
		}
	</script>

@endsection