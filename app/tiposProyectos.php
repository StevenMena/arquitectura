<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposProyectos extends Model
{

protected $table = 'tiposProyectos';

protected $fillable = [
        'tipoProyecto','estado',
    ];
}
