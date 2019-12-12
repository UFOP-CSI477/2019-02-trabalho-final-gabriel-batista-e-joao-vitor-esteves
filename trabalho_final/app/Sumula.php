<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sumula extends Model
{
    public function evento(){
        return $this->belongsTo('App\Evento');
    }
}
