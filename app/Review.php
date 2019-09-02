<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //

    public function emisor()
    {
      return $this->belongsTo('App\User', 'emisor_id');
    }

    public function receptor()
    {
      return $this->belongsTo('App\User', 'receptor_id');
    }


}
