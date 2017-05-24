@extends('layout.master')
@section('content')
<script>

</script>
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

<script>
        var token = '{{ Session::token() }}';
        var urlLike = '{{route('like') }}';
    </script>
@stop