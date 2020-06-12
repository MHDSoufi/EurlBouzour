<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    public function comune()
    {
        return $this->hasMany('App\Model\Comune');
    }
}
