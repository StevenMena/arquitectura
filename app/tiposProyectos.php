<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposProyectos extends Model
{

protected $table = 'tiposproyectos';

protected $fillable = [
        'tipoProyecto','estado',
    ];
}
