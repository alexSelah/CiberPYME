<?php

namespace CiberPYME;

use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{
    public function amenaza() {
    	return $this->belongTo(\CiberPYME\Amenaza::class);
    }

    public function decisiones() {
        return $this->hasMany(\CiberPYME\Decision::class);
    }
}
