@extends('layout.master')
@section('content')
<div class="row">

    @foreach( $arrayVideos as $key => $video )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

            <h4  id="white" style="min-height:45px;margin:5px 0 10px 0">
                {{$video->titulo}}
            </h4>
            <h4>
            	{{$video->url}}
            </h4>
        </a>

    </div>
    @endforeach

</div>
@stop