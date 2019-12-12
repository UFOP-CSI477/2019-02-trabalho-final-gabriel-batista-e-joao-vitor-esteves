<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	public function time(){
        return $this->belongsTo('App\Time');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
