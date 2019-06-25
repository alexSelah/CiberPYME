<?php

namespace CiberPYME;

use Illuminate\Database\Eloquent\Model;

class Salvavulnera extends Model
{
    public function user() {
    	return $this->belongTo(\CiberPYME\Amenaza::class);
    }

}
