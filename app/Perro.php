<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }

    public function imagen(){
      return $this->hasMany('App\Imagen');
    }
}
