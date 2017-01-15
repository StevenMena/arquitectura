<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{

	protected $table = 'estudiante';
	protected $primaryKey = 'id';
	protected $fillable = [
	        'nombre','apellidos','email','telefono','idProyecto',
	    ];
	const CREATED_AT = 'fechaCreacion';

}
