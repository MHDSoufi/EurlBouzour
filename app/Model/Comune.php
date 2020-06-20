<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comune extends Model
{
	protected $guarded = ['id'];
	public $timestamps = false;
    public function Wilaya()
    {
        return $this->belongsTo('App\Model\Wilaya');
    }
}

