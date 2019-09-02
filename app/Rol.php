<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //Relacion con users

    public function user()
    {
      return $this->hasMany('App\User', 'user_id');
    }
}
