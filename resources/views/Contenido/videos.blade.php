@extends('layout.master')
@section('content')
<div class="row">
    @include('partials._messages')
    @foreach ($videos as $key => $video)

    <div class="col-xs-4 col-sm-4 col-md-4 text-center">
            <video width="320" height="240" controls>
                <source src="/videos/{{$video->url}}" type="video/mp4">
             Your browser does not support the video tag.
            </video>
            <p id="white">{{$video->titulo}}</p>
    </div>
    @endforeach

</div>
@stop