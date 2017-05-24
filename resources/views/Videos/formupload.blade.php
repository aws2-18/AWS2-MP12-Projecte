@extends('layout.master')
@section('content')
<!--
    <div class="row">
        <H1 id="white">Panel de Usuario</H1>
        <div id="derechaEdit" class="col-md-2"><button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/editar/usuario/{{$id = Auth::user()->id}}'"><span class="glyphicon glyphicon-pencil"></span>Editar Usuario</button> 
        </div> 
        <div id="derechaEdit" class="col-md-3"><button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/subirvideo'"><span class="glyphicon glyphicon-pencil"></span>Subir Video</button> 
        </div> 
        <div class="col-md-12">
            <form action="{{url('video/postUpload/')}}/{{$id}}}}" method="POST" enctype="multipart/form-data">
                {{method_field('PUT')}}
                {{ csrf_field() }}
                <div>
                <label id="white">Titulo</label>
                <input type="text" name="title">
                </div>
                <div>
                    <label id="white">Comentario</label>
                    <textarea name="comentario"></textarea>
                </div>
                <div>
                <label id="white">Seleccionar archivo</label>
                <input type="file" name="video" required id="white">
                </div>
                
                <input type="submit" value="Subir video" class="btn btn-primary">
             </form>
        </div>
    </div>
-->
<script type="text/javascript">
Dropzone.options.myDropzone= {
    url: '/postUpload/',
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 5,
    maxFiles: 1,
    maxFilesize: 20,
    acceptedFiles: 'video/*',
    addRemoveLinks: true,
    init: function() {
        dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

        // for Dropzone to process the queue (instead of default form behavior):
        document.getElementById("submit-all").addEventListener("click", function(e) {
            // Make sure that the form isn't actually being sent.
            e.preventDefault();
            e.stopPropagation();
            dzClosure.processQueue();
        });

        //send all the form data along with the files:
        this.on("sendingmultiple", function(data, xhr, formData) {
            formData.append("title", jQuery("#title").val());
            formData.append("comentario", jQuery("#comentario").val());
        });
    }
}

</script>
    <div class="row">
        <H1 id="white">Panel de Usuario</H1>
        <p id="white">Subir un video</p>
        <div id="derechaEdit" class="col-md-2"><button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/editar/usuario/{{$id = Auth::user()->id}}'"><span class="glyphicon glyphicon-pencil"></span>Editar Usuario</button> 
        </div> 
        <div id="derechaEdit" class="col-md-3"><button type="button" class="btn btn-warning" onclick="location.href='{{url('/')}}/subirvideo'"><span class="glyphicon glyphicon-pencil"></span>Subir Video</button> 
        </div> 
        <div class="col-md-12">
        <!--
            <form action="{{url('video/postUpload/')}}/{{$id}}}}" enctype="multipart/form-data" method="POST"  >
                {{method_field('PUT')}}
                {{ csrf_field() }}
                <div>
                    <label sid="white">Titulo</label>
                    <input type="text" name="title" id="title" class="form-control" />
                </div>
                <div>
                    <label id="white">Descripcion</label>
                    <input type="text" name="comentario" id="comentario" class="form-control" />
                </div>
                
                <div>
                <label id="white">Seleccionar archivo</label>
                <input type="file" name="video" required id="white">

                </div>
                <br>
                <div class="dropzone" id="my-dropzone" name="mainFileUploader">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </div>
                             
                <input type="submit" value="Subir video" id="submit-all" class="btn btn-primary">
             </form>
--> 
             <form action="/postUpload/" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <label id="white">Titulo</label>
                <input type="text" id ="title" name ="title" />
                <label id="white">Descripcion</label>
                <input type="text" id ="comentario" name ="comentario" />
                <div class="dropzone" id="myDropzone"></div>
                <button type="submit" id="submit-all"> upload </button>
            </form>
             

        </div>
    </div>

@endsection