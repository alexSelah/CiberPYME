<?php

namespace CiberPYME;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    //

	public function user() {
    	return $this->belongTo(\CiberPYME\User::class);
    }

    public function amenazas() {
     	return $this->hasMany(\CiberPYME\Amenaza::class);
    }
}
