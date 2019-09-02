<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Relaciones con Post

    public function post(){
      return $this->hasMany('App\Post', 'categoria_id');
    }
}
