@extends('layout.master')
@section('content')
<!--
<div class="row">
    @include('partials._messages')

    <div class="col-xs-12 col-sm-12 col-md-12 text-center" id="contenedorvideo">
            <video width="960" height="720" id="bordevideo" controls>
            <h1 id="white">ey</h1>
                <source src="/videos/{{$video->url}}" type="video/mp4">
             Your browser does not support the video tag.
            </video>
        <div id="infvideo">
            <div class="col-xs-1 col-sm-1 col-md-1"></div>
            <div id="izqvid" class="col-xs-3 col-sm-3 col-md-3">
            <h2 id="colorvideo">{{$video->titulo}}</h2>
            </div>
            <div id="centrovid" class="col-xs-3 col-sm-3 col-md-3">
              <h4 id="colorvideo">{{$video->usuario}}</h4>
            </div>
            <div id="dervid" class="col-xs-3 col-sm-3 col-md-3">
              <a href="#" data-videoid="{{$video->id}}" class="like">{{Auth::user()->likes()->where('video_id', $video->id)->first() ? Auth::user()->likes()->where('video_id', $video->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like'}}</a>|
              <a href="#" data-videoid="{{$video->id}}" class="like">{{Auth::user()->likes()->where('video_id', $video->id)->first() ? Auth::user()->likes()->where('video_id', $video->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike' : 'Dislike'}}</a>
            </div>
            

        </div>
    </div>
    
</div>
-->
<style type="text/css">
	video{
		margin-top: 1%;
	}
    #info{
    	background-color: white;
    	color: black;     
    }
    #video{
    	margin-top: 1%;
    	background-color: black;
    	margin-bottom: 1%;   
    }
    #caja{
    	background-color: white;
    	margin-bottom: 1%;	
    }
    #title{
    	background-color: white;
       
    }
    #avatar{
    	background-color: white;
    	float: left;
    	border: 2px solid black;
       
    }
    #nombre{
    	background-color: white;
    	float: left;
    	font-size: 13;
    	margin-left: 1%;
    	color: black;
    	height: auto;
    }
    #name{
    	font-size: 15;
	}
	#texto{
		background-color: white;
    	font-size: 15;
    	/*font-family: ;*/
	}
	button:hover {
		background-color: #e62117;
	}
	#separar{
    	height: 0.5%;
    	background-color: black;
	}
    #visulike{
        float:right;
        background-color: white;
        margin-right: 5%;
    }
    #likeDis{
        text-align: left;
        background-color: white;
        text-align: center;
    }
    #likeDis a{
         
    }
    #visu{
        text-align: left;
        background-color: white;
        font-size: 20;
    }
</style>

<div class="row" id="video">
    <div class="col-md-12">
        <div id="gallery-videos" align="center">
            @include('partials._messages')
            <ul>            
                <li>
                    <video width="840" height="500" controls id="videos">
                    <source src="/videos/{{$video->url}}" type="video/mp4">
                    Your browser does not support the video tag.
                    </video>
                </li>

            </ul>
        </div>

    </div>
</div>

<div class="row" id="caja">
	<div id="title">
		<h3><b>{{$video->titulo}}</b></h3>
	</div>

	<div id="info">
		<div id="avatar">
			<img src="/images/default-user.png" width="48px" height="48px">	
			<!--<img src="{{$imagen = Auth::user()->imagen}}" width="48px" height="48px">-->

		</div>
		<div id="nombre">
			<a href="#" id="name"><b>{{$name = Auth::user()->name}}</b></a><br>
			<button ><b>Suscribirse</b></button>	
		</div>
        <div id="visulike">
            <div id="visu">
                <p><b>122 visualizaciones</b></p>  
            </div>
            <div id="likeDis">     
                <a href="#" data-videoid="{{$video->id}}" class="like">{{Auth::user()->likes()->where('video_id', $video->id)->first() ? Auth::user()->likes()->where('video_id', $video->id)->first()->like == 1 ? 'You like this post' : 'Like' : 'Like'}}</a>|
                <a href="#" data-videoid="{{$video->id}}" class="like">{{Auth::user()->likes()->where('video_id', $video->id)->first() ? Auth::user()->likes()->where('video_id', $video->id)->first()->like == 0 ? 'You don\'t like this post' : 'Dislike' : 'Dislike'}}</a>
                <br><br>
            </div>       
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