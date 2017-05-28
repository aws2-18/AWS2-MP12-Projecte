var videoId = 0;
var postBodyElement = null;

$('#modal-save').on('click', function () {
    $.ajax({
            method: 'POST',
            url: urlEdit,
            data: {body: $('#post-body').val(), videoId: videoId, _token: token}
        })
        .done(function (msg) {
            $(postBodyElement).text(msg['new_body']);
            $('#edit-modal').modal('hide');
        });
});

$('.like').on('click', function(event) {
    event.preventDefault();
    videoId = $(this).data("videoid");
    var isLike = event.target.previousElementSibling == null ? true : false;
    $.ajax({
        method: 'POST',
        url: urlLike,
        data: {isLike: isLike, videoId: videoId, _token: token}
    })
    .done(function() {
        event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You don\'t like this post' : 'Dislike';    });
    if (isLike){
        event.target.nextElementSibling.innerText = 'Dislike';
    } else{
        event.target.previousElementSibling.innerText = 'Like';
    }
});

    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });

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
     

//videoId = $(this).data("video-id"); // event.target.parentNode.parentNode.dataset['videoid'];
//    var isLike = !($(this).hasClass("dislike")); // event.target.previousElementSibling == null ? true : false;
//