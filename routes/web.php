<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

/*
Route::get('/inicio', function () {
    return view('inicio');
});
*/
Route::get('/nosotros', function () {
    return view('menu/nosotros');
});

Route::get('/contacto',[
    'as' => 'contacto',
	'uses' => 'MainController@getContacto'
]);

Route::get('/proyectos/graduacion',[
    'as' => 'proyectos.graduacion',
	'uses' => 'MainController@getGraduacion'
]);

Route::get('/fases',[
	'as' => 'fases',
	'uses' => 'MainController@getFases'
]);

Route::get('/gmaps', ['as ' => 'gmaps', 'uses' => 'GmapsController@index']);

Route::get('/admin', function () {
    return view('admin');
});


/* Rutas para login*/
Route::resource('login','LoginController');


/* Rutas para Panel Usuarios*/
Route::resource('user','UsuarioController');

/* Rutas para proyectos*/
Route::resource('proyectos','ProyectoController');