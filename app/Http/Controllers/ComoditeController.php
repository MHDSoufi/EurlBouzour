<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Model\Comodite;

class ComoditeController extends Controller
{
    public function giveComodeNa ($id){
    	//$idpromo = $id;
    	return Comodite::whereDoesntHave('promos', function (Builder $query) use ($id){
					$query->where('promo_id', '=' , $id);
				})->get();
   	 } 
}
