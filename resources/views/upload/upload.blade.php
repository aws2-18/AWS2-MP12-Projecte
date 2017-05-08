<DOCTYPE html>
<html lang="en">
<head>
     <title>Título</title>
</head>
<body>

<div class="col-lg-offset-4 col-lg-4">
    <form action="/store" enctype="multipart/form-data" method="post">
    {{csrf_field()}}
	    <input type="file" name="image">
	    <br>
	    <input type="submit" name="Upload">
    </form> 
</div>
</body>
</html>