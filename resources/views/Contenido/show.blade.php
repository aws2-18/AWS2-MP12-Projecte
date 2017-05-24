@extends('layout.master')
@section('content')
<!--
<div class="row">
    @include('partials._messages')

    <div class="col-xs-4 col-sm-4 col-md-4 text-center">
        <h2 id="white">{{$video->titulo}}</h2>
            <video width="320" height="240" controls>
                <source src="/videos/{{$video->url}}" type="video/mp4">
             Your browser does not support the video tag.
            </video>
           
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
    }
    #likeDis{
        text-align: left;
        background-color: white;
        text-align: center;
    }
    #likeDis a{
         padding-right: 10%;
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
                    <video width="840" height="480" controls id="videos">
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
                <a href="#">
                    <img border="0" alt="Me gusta este vídeo" src="/images/like.png" width="20" height="20"> 112
                </a>
                <a href="#">
                    <img border="0" alt="No me gusta este vídeo" src="/images/dislike.png" width="20" height="20"> 21
                </a><br><br>
            </div>       
        </div> 
	</div>
</div>

<div class="row" id="separar">
</div>
<div class="row" id="caja2">
	<div id="texto">
        <p><b>Publicado el {{ date('d F. Y', strtotime($video->created_at)) }}</b></p>
		<p>{{$video->comentario}}</p>
	</div>
</div>

	
@stop