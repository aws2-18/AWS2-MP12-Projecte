@extends('layout.master')
@section('content')
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
@stop