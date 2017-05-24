@extends('layout.master')
@section('content')
<!--
<div class="row">
    @include('partials._messages')
    @foreach ($videos as $key => $video)

    <div class="col-xs-4 col-sm-4 col-md-4 text-center">
            <video width="320" height="240" controls>
                <source src="/videos/{{$video->url}}" type="video/mp4">
             Your browser does not support the video tag.
            </video>
            <a href="{{url('/clips/' . $video->id)}}"><p id="white">{{$video->titulo}}</p></a>
    </div>
    @endforeach

</div>
-->
<style type="text/css">
    #videos{
      
       
    }

    #gallery-videos video{
        border: 2px solid black;
        
    }
    
    #gallery-videos ul{
        margin: 0;
        padding: 0;
    }
    
    #gallery-videos li{
        list-style: none;
        float: left;
        padding-right: 15px;
        padding-top: 10px;
        margin-left: 20px;
    }

</style>
<div class="row">
    <div class="col-md-12" style="color:white">
        <h1>Videos</h1>
    </div>
</div><br>

<div class="row">
    <div>
        <div id="gallery-videos">
            @include('partials._messages')
            <ul>
                @foreach ($videos as $key => $video)
                <li>
                    <video width="320" height="auto" controls id="videos">
                    <source src="/videos/{{$video->url}}" type="video/mp4">
                    Your browser does not support the video tag.
                    </video><br>
                    <a href="{{url('/clips/' . $video->id)}}">{{$video->titulo}}</a>  
                </li>
                @endforeach
            </ul>
        </div>

    </div>
</div>

@stop