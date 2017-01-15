<?php
Route::group(['prefix' => 'proyectos' , 'middleware' => ['auth']], function(){

	/* Rutas para proyectos*/
	Route::resource('proyectos','ProyectoController');

	Route::get('/dt-row-data',[
	 		'as' => 'dt.row.data.proyectos',
			'uses' => 'ProyectoController@getDataRowsProyectos'
	 	]);	

	Route::post('/actualizarpry',[
			'as' => 'proyecto.actualizar',
			'uses' => 'ProyectoController@actualizar'
	 	]);	

	Route::get('/eliminarpry/{idProyecto}',[
			'as' => 'proyecto.destroy',
			'uses' => 'ProyectoController@eliminar'
	 	]);	
	
	Route::post('/comentario',[
			'as' => 'guardar.estudiante',
			'uses' => 'ProyectoController@guardar'
	 	]);	
	Route::get('/dt-row-data-inicio',[
	 		'as' => 'dt.row.data.estudiantes',
			'uses' => 'ProyectoController@getDataRowsEstudiantes'
	 	]);	

});