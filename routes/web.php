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
Route::get('/proyectos/leer/{id}',[
    'as' => 'proyectos.leer',
    'uses' => 'MainController@getProyecto'
]);

Route::get('/proyectos/horas',[
    'as' => 'proyectos.horas',
    'uses' => 'MainController@getHorasSociales'
]);

Route::get('/proyectos/disponibles',[
    'as' => 'proyectos.disponibles',
    'uses' => 'MainController@getDisponibles'
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



/*Ruta para estudiantes interesados*/
Route::get('/interesados',[
    'as' => 'interesados',
    'uses' => 'MainController@getInteresados'
]);

/* Rutas para login*/
Route::resource('login','LoginController');
Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@getLogout']);
