<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaFamiliaAmigos extends Ficha
{
    protected $table='fichasFamiliaAmigos';
    protected $fillable = [
        'madre',
        'padre',
        'hijos',
        'conyugue',
        'amigos',
    ];

    public function asistido(){
        return $this->belongsTo('App\Asistido');
    }
}
