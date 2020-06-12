<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comune extends Model
{
    public function Wilaya()
    {
        return $this->belongsTo('App\Model\Wilaya');
    }
}

