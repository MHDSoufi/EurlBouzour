<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comodite extends Model
{
     public $timestamps = false;

      public function promos()
    {

        return $this->belongsToMany('App\Model\Promo', 'promos_comodites');
    }
}
