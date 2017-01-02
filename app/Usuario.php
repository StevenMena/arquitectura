<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    
protected $fillable = [
        'nombre','apellidos','email','usuario', 'password', 'estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function setPasswordAttribute($valor){
        if(!empty($valor)){
            $this->attributes['password']=\Hash::make($valor);
        }
    }
}
