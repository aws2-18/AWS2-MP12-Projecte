@extends('layout.master')
@section('content')


<div class="row" id="videoviewvideo">
    <div class="col-md-12">
        <div id="gallery-videos" align="center">
            @include('partials._messages')
            <ul>            
                <li>
                    <video width="840" height="500" controls id="videos3" >
                    <source src="/videos/{{$video->url}}" type="video/mp4">
                    Your browser does not support the video tag.
                    </video>
                </li>

            </ul>
        </div>

    </div>
</div>

<div class="row" id="cajaviewvideo">
	<div id="titleviewvideo">
		<h3><b>{{$video->titulo}}</b></h3>
	</div>

	<div id="infoviewvideo">
		<div id="avatarviewvideo">
              <img src="/images/default-user.png" width="48px" height="48px">

		</div>
		<div id="nombreviewvideo">
			<a href="#" id="nameviewvideo"><b>{{$video->usuario}}</b></a><br>
			<button ><b>Suscribirse</b></button>	
		</div>
        <div id="visulike">
            <div id="visu">
                <p><b>122 visualizaciones</b></p>  
            </div>
            @if(Auth::check())
            <div id="likeDis">     
                <a href="#" data-videoid="{{$video->id}}" class="like">{{Auth::user()->likes()->where('video_id', $video->id)->first() ? Auth::user()->likes()->where('video_id', $video->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like'}}</a>|
                <a href="#" data-videoid="{{$video->id}}" class="like">{{Auth::user()->likes()->where('video_id', $video->id)->first() ? Auth::user()->likes()->where('video_id', $video->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike' : 'Dislike'}}</a>
                <br><br>
            </div>
            @else
            <div id="likeDis">
            <a href="#">Like</a>|
            <a href="#">Dislike</a>
                <br><br>
            </div>
            @endif       
        </div> 
	</div>
</div>

<div class="row" id="separar">
</div>
<div class="row" id="caja2">

	<div id="texto">
        <p><b>Publicado el {{ date('d F. Y', strtotime($video->created_at)) }}</b></p>
		
	</div>

</div>

	
<script>
        var token = '{{ Session::token() }}';
        var urlLike = '{{route('like') }}';
    </script>
@stop