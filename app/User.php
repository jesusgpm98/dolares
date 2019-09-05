<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'email', 'telefono','ci', 'fotoCI','estado', 'pais', 'ubicacion','apellido','password', 'rol_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relacion con roles

    public function rol()
    {
      return $this->belongsTo('App\Rol', 'user_id');
    }


    //Relacion con Post
    public function post(){
      return $this->hasMany('App\Post', 'categoria_id');
    }

    //Relacion con Solicitud Emisor
    public function solicitudEmisor(){
      return $this->hasMany('App\Solicitud', 'emisor_id');
    }

    //Relacion con review Emisor
    public function reviewEmisor(){
      return $this->hasMany('App\Post', 'emisor_id');
    }

    //Relacion con Rating Emisor
    public function ratingEmisor(){
      return $this->hasMany('App\Rating', 'emisor_id');
    }

    //Relacion con Solicitud Receptor
    public function solicitudReceptor(){
      return $this->hasMany('App\Solicitud', 'receptor_id');
    }

    //Relacion con review Receptor
    public function reviewReceptor(){
      return $this->hasMany('App\Post', 'receptor_id');
    }

    //Relacion con Rating Receptor
    public function ratingReceptor(){
      return $this->hasMany('App\Rating', 'receptor_id');
    }

}
