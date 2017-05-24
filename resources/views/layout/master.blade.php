<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
<link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.css')}}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
<script type="text/javascript" src="{{ asset('js/lightbox.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {  
            console.log("El documento está listo"); 
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });

    Dropzone.options.addImages = {
        maxFilesize: 50,
        acceptedFiles: 'image/*',
        //maxFiles: 1, Numero de archivos que se suben
        success: function(file, response){
            if(file.status == 'success'){
                handleDropzoneFileUpload.handleSuccess(response);
                console.log("BIEEENNN!!!")
            }else{
                handleDropzoneFileUpload.handleError(response);
            }

        }
    };
    

    var handleDropzoneFileUpload = {
        handleError: function(response){
            console.log(response);
        },
        handleSuccess: function(response){
            var baseUrl = "{{ url('/') }}";
            var imageList = $('#gallery-images ul');
            //Mostrar img en view (Original o miniatura)
            var imageSrc = baseUrl + '/gallery/images/thumbs/' + response.file_name;
            $(imageList).append('<li><a href="' + imageSrc + '" data-lightbox="mygallery" ><img src="' + imageSrc + '"></a></li>');
        }
    };
    
</script>
<body>
 @include('css.navbar')
<div class="container">
@yield('content')
</div>
@include('css.footer')
</body>
