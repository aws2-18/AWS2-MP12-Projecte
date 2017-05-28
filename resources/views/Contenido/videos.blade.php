@extends('layout.master')
@section('content')

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
                    <video width="320" height="auto" controls id="videos2">
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