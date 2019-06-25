<?php

namespace CiberPYME;

use Illuminate\Database\Eloquent\Model;

class Amenaza extends Model
{
    //
    //
    
    public function activo() {
    	return $this->belongTo(\CiberPYME\Activo::class);
    }
    
    public function salvavulneras() {
     	return $this->hasMany(\CiberPYME\Salvavulnera::class);
    }

    public function riesgo() {
     	return $this->hasOne(\CiberPYME\Riesgo::class);
    }

    
}
