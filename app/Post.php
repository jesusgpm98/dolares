<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    //Relacion con Categoria
    public function categoria(){
      return $this->belongsTo('App\Categoria', 'categoria_id');
    }

    //Relacion con User
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
