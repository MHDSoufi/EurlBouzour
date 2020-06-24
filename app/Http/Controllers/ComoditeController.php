<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use App\Model\Comodite;
use Session;

class ComoditeController extends Controller
{
    public function giveComodeNa ($id){
    	//$idpromo = $id;
    	return Comodite::whereDoesntHave('promos', function (Builder $query) use ($id){
					$query->where('promo_id', '=' , $id);
				})->get();
   	 }

   	 public function deleteComode($promoId,$comodId){
   	 	$comod = Comodite::find($comodId);
   	 	if($comod->promos()->detach($promoId)){
   	 		Session::flash('message', 'Les Comodiées ont été supprimé');
        	Session::flash('alert-class', 'alert-success');
        	return redirect(route('promo.edit', $promoId));
   	 	}else{
   	 		Session::flash('message', 'Une erreur c\'est produite');
        	Session::flash('alert-class', 'alert-danger');
        	return redirect(route('promo.edit', $promoId));
   	 	}
   	 }
	
   	
}
