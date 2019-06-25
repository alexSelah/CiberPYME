<?php

namespace CiberPYME;

use Illuminate\Database\Eloquent\Model;

class Decision extends Model
{
    public function riesgo() {
    	return $this->belongTo(\CiberPYME\Riesgo::class);
    }
}
