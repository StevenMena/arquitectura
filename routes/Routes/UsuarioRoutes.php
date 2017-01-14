<?php
Route::group(['prefix' => 'usuarios' , 'middleware' => ['auth']], function(){

	Route::resource('user','UsuarioController');

	
});