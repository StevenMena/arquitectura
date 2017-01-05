<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
        
protected $fillable = [
        'nombreProyecto','descripcion','tipo','imagen','origen','estado',
    ];

}
