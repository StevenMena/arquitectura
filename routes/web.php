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
foreach (new DirectoryIterator(__DIR__.'/Routes') as $file)
{
    if (!$file->isDot() && !$file->isDir() && $file->getFilename() != '.gitignore')
    {
        require_once __DIR__.'/Routes/'.$file->getFilename();
        //require_once __DIR__.'/Routes/'.$file->getFilename();
    }
}

Route::get('/',[
    'as' => 'index',
    'uses' => 'MainController@getInicio'
]);

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

Route::get('/areas',[
    'as' => 'areas',
    'uses' => 'MainController@getAreas'
]);


Route::get('/plan',[
    'as' => 'plan',
    'uses' => 'MainController@getPlan'
]);
Route::get('/gmaps', ['as ' => 'gmaps', 'uses' => 'GmapsController@index']);

Route::get('/admin', function () {
    return view('admin');
});


/* Rutas para login*/
Route::resource('login','LoginController');
Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@getLogout']); 



/* Rutas para proyectos*/
Route::resource('proyectos','ProyectoController');

/* Rutas para Noticias */
Route::resource('noticias','NoticiasController');

