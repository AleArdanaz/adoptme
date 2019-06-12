<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
  public function perro(){
    return $this->belongsTo('App\Perro');
  }
}
