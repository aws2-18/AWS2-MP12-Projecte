@extends('layout.masteradmin')
@section('content')
		<div class="row">
		<div class="col-md-8">
			<form method="POST" action="{{ route('admin.galerias.update', $gallery->id) }}">
    			  <div class="form-group">
    			  <label><strong>Titulo</strong></label>
    			    <textarea type="text" class="form-control input-lg" id="title" name="title" rows="1" required style="resize:none;">{{ $gallery->name}}</textarea>
    			  </div>
    			  <div class="form-group">
    			  <label><strong>Created by</strong></label>
     			   <textarea type="text" class="form-control input-lg" id="autor" name="autor" value="" rows="1">{{ $gallery->created_by}}</textarea>
   	  			 </div>
             <div class="form-group">
            <label><strong>Published</strong></label>
             <textarea type="text" class="form-control input-lg" id="pub" name="pub" value="" rows="1">{{ $gallery->published}}</textarea>
             </div>
            

   		 </div>
    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Created at:</dt>
          <dd>{{ date('M j, Y h:i:sa', strtotime($gallery->created_at)) }}</dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Last updated:</dt>
          <dd>{{ date('M j, Y h:i:sa', strtotime($gallery->updated_at)) }}</dd>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
            <a href="{{ route('admin.galerias.show', $gallery->id) }}" class="btn btn-danger btn-block">Cancel</a>
          </div>
          <div class="col-sm-6">
              <button type="submit" class="btn btn-success btn-block">Save Changes</button>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              {{ method_field('PUT') }}
       </form>﻿
	</div>



@endsection