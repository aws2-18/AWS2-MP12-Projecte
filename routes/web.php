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
Route::get("/vids",'Multimedia@getVideos');


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
//Contacto
Route::get('contacta', 'PagesController@getContact');
Route::post('contacta', 'PagesController@postContact');
//Imagen carpeta
Route::get('upload','uploadController@index');
Route::post('store','uploadController@store');