<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Pagina web inicial


//Pagina web videos
//Route::get('/videos','Multimedia@getVideos');
Route::get("/clips",'Multimedia@getVideos3');
//Ruta para ver el video, likes, dislike, etc
Route::get("/clips/{id}",'Multimedia@getVideoInfo');


//Pagina web categorias (videos)
Route::get('/categorias','Multimedia@getCategorias');
//Pagina web albums(fotos+gifs)
Route::get('/albums','Multimedia@getAlbums');


//Footer
Route::get('/informacion','Footer@getInformacion');
Route::get('/partners','Footer@getPartners');
Route::get('/ayuda','Footer@getAyuda');
Route::get('/blog','Footer@getBlog');



Route::get('/home', 'HomeController@getHome')->name('home');

//Route::get('/home', 'HomeController@index');

//Registro
Route::get('/registro','Auth@getRegistro');
//Panel del Usuario
Route::get('/usuario/{id}','Auth@getPanel');
//View para cambiar datos
Route::get('/editar/usuario/{id}','Auth@getEdit');
//View a la que llamamos para que ejecute la funcion que cambia los datos
Route::put('/editar/usuario/postEdit/{id}','Auth@postEdit');


//View para ver formulario para subir video
Route::get('subirvideo/{id}','Multimedia@getFormvideo');

//View para añadir los datos
Route::put('video/postUpload/{id}','Multimedia@postUpload');



//Contacto
Route::get('contacta', 'PagesController@getContact');
Route::post('contacta', 'PagesController@postContact');
//Imagen avatar
Route::get('upload','uploadController@index');
Route::post('store','uploadController@store');

//Galeria de fotos
Route::get('gallery/list','GalleryController@viewGalleryList');
Route::post('gallery/save','GalleryController@saveGallery');
Route::get('gallery/delete/{id}','GalleryController@deleteGallery');
Route::get('gallery/view/{id}','GalleryController@viewGalleryPics');
Route::post('image/do-upload','GalleryController@doImageUpload');

//Mostrar solo la Galeria
Route::get('galeria','GalleryController@viewGalleryTodo');
Route::get('galeria/imagenes/{id}','GalleryController@viewImagenes');

//Pepito
Route::post('pepito','uploadController@pepito');
Route::get('/userimage/{filename}', [
    'uses' => 'Auth@getUserImage',
    'as' => 'account.image'
]);
//Videos
Route::get('get-video/{video}', 'Multimedia@getVideo2')->name('getVideo2');

Route::post('/like', [
	'uses' => 'Multimedia@postLikePost',
	'as' => 'like'
	]);

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::prefix('admin')->group(function() {
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/','AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	Route::get('/videos','AdminController@showVideos')->name('admin.videos');
	Route::get('/usuarios','AdminController@showUsuarios')->name('admin.usuarios');
	Route::get('/galerias','AdminController@showGalerias')->name('admin.galerias');

//videos
	Route::get('video/create', ['uses' => 'AdminController@uploadVideo', 'as' => 'admin.videos.formupload']);
	Route::post('videos/postUpload', ['uses' => 'AdminController@store', 'as' => 'admin.videos.store']);
	Route::get('video/{id}/edit', ['uses' => 'AdminController@edit', 'as' => 'admin.videos.edit']);
	Route::put('videos/{id}', ['uses' => 'AdminController@update', 'as' => 'admin.videos.update']);
	Route::delete('video/{id}', ['uses' => 'AdminController@destroy', 'as' => 'admin.videos.destroy']);
	Route::get('video/{id}/delete', ['uses' => 'AdminController@delete', 'as' => 'admin.videos.delete']);
	Route::get('video/{id}', ['uses' => 'AdminController@show', 'as' => 'admin.videos.show']);


//usuarios
	Route::get('usuario/create', ['uses' => 'AdminController@createUser', 'as' => 'admin.usuarios.formupload']);
	Route::post('usuarios/postUpload', ['uses' => 'AdminController@storeUser', 'as' => 'admin.usuarios.store']);
	Route::get('usuario/{id}/edit', ['uses' => 'AdminController@editUser', 'as' => 'admin.usuarios.edit']);
	Route::put('usuarios/{id}', ['uses' => 'AdminController@updateUser', 'as' => 'admin.usuarios.update']);
	Route::delete('usuario/{id}', ['uses' => 'AdminController@destroyUser', 'as' => 'admin.usuarios.destroy']);
	Route::get('usuario/{id}/delete', ['uses' => 'AdminController@delete', 'as' => 'admin.usuarios.delete']);
	Route::get('usuario/{id}', ['uses' => 'AdminController@showUsuario', 'as' => 'admin.usuarios.show']);

//galerias
	Route::get('galeria/create', ['uses' => 'AdminController@createGallery', 'as' => 'admin.galerias.formupload']);
	Route::post('galerias/postUpload', ['uses' => 'AdminController@storeGallery', 'as' => 'admin.galerias.store']);
	Route::get('galeria/{id}/edit', ['uses' => 'AdminController@editGallery', 'as' => 'admin.galerias.edit']);
	Route::put('galerias/{id}', ['uses' => 'AdminController@updateGallery', 'as' => 'admin.galerias.update']);
	Route::delete('galeria/{id}', ['uses' => 'AdminController@destroyGallery', 'as' => 'admin.galerias.destroy']);
	Route::get('galeria/{id}/delete', ['uses' => 'AdminController@delete', 'as' => 'admin.galerias.delete']);
	Route::get('galeria/{id}', ['uses' => 'AdminController@showGaleria', 'as' => 'admin.galerias.show']);
});



