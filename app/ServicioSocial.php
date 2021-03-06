<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioSocial extends Model
{
protected $fillable =[
        'id_tipo',
        'fecha_ini',
        'fecha_fin',
        'institucion',
        'referente',
        
    ];

	public function instituciones(){
        return $this->hasOne('App\Institucion'); 
    }  

   public function fichaAsistenciaSocial(){
        return $this->belongsTo('App\fichaAsistenciaSocial');
    }
}
