<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Comodite;
class Promo extends Model
{
	protected $guarded = ['id'];
	public $timestamps = false;
     /**
     * The products that belong to the shop.
     */
    public function comodites()
    {

        return $this->belongsToMany('App\Model\Comodite', 'promos_comodites', 'promo_id', 'comodite_id');
    }

 

    public function imagePromo()
    {
    	return $this->hasMany('App\Model\ImagesPromo');
    }

    /**
     * Relation entre promo et bien.
     */
    public function biens()
    {
        return $this->belongsToMany('App\Model\Bien');
    }
}
