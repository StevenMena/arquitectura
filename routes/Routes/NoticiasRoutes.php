<?php
Route::group(['prefix' => 'noticias' , 'middleware' => ['auth']], function(){

	/* Rutas para Noticias */
	Route::resource('noticias','NoticiasController');

	
});