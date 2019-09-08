<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

  protected $fillable = ['nombre', 'descripcion'];

    //Relaciones con Post

    public function post(){
      return $this->hasMany('App\Post', 'categoria_id');
    }
}
