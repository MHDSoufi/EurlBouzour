<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ImagesPromo extends Model
{
   public $timestamps = false;
   protected $guarded = ['id'];

   public function promo()
   {
   		return $this->belongsTo('App\Model\Promo');
   } 
}
