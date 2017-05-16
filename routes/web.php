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
Route::get('/', function () {
    return view('welcome');
});

//Pagina web videos
//Route::get('/videos','Multimedia@getVideos');
Route::get("/clips",'Multimedia@getVideos3');


//Pagina web categorias (videos)
Route::get('/categorias','Multimedia@getCategorias');
//Pagina web albums(fotos+gifs)
Route::get('/albums','Multimedia@getAlbums');


//Footer
Route::get('/informacion','Footer@getInformacion');
Route::get('/partners','Footer@getPartners');
Route::get('/ayuda','Footer@getAyuda');
Route::get('/blog','Footer@getBlog');


Auth::routes();

Route::get('/home', 'HomeController@getHome')->name('home');


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
Route::put('/video/postUpload/{id}','Multimedia@postUpload');
//Contacto
Route::get('contacta', 'PagesController@getContact');
Route::post('contacta', 'PagesController@postContact');
//Imagen carpeta
Route::get('upload','uploadController@index');
Route::post('pepito','uploadController@pepito');

Route::get('/userimage/{filename}', [
    'uses' => 'Auth@getUserImage',
    'as' => 'account.image'
]);

Route::get('get-video/{video}', 'Multimedia@getVideo2')->name('getVideo2');
//Traduccion
