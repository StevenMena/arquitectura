<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    protected $table= 'noticias';
    protected $primaryKey = 'id';
	protected $fillable = [
        'nombreNoticia','textoNoticia','archivo',
    ];
    public $timestamps=false;

}
