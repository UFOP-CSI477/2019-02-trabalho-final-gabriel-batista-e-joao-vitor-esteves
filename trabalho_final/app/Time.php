<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function evento(){
        return $this->hasMany('App\Evento');
    }
}
