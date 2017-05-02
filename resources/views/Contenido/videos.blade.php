@extends('layout.master')
@section('content')


<div class="row">
	@foreach ($arrayVideos as $key => $video)
	<div class="col-xs-6 col-sm-4 col-md-3 text-center">
		<iframe width="300" height="300" src="//www.youtube.com/watch?v=ODlmDbtZy8c"></iframe>
		<h4 style="min-height:45px;margin:5px 0 10px 0">
			 {{$video->titulo}}
		</h4>
	</div>
	@endforeach
</div>
@stop