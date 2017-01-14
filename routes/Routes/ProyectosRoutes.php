<?php
Route::group(['prefix' => 'proyectos' , 'middleware' => ['auth']], function(){

	/* Rutas para proyectos*/
	Route::resource('proyectos','ProyectoController');

	Route::get('/dt-row-data',[
	 		'as' => 'dt.row.data.proyectos',
			'uses' => 'ProyectoController@getDataRowsProyectos'
	 	]);	

	

	
});