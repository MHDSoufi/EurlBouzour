<?php
use Illuminate\Support\Facades\DB;
use App\Model\Comodite;
use App\Model\Wilaya;
use App\Model\Promo;
if (!function_exists('giveWilaya')) {
	 function giveWilaya(){
		return DB::table('wilayas')->get();
	}
}

if (!function_exists('giveComodite')) {
	 function giveComodite(){
		return Comodite::all();
	}
}

if (!function_exists('giveWilayaId')) {
	 function giveWilayaId($intitulet){
		return Wilaya::firstWhere('intitulet', $intitulet);
	}
}

if (!function_exists('getLienImage')) {
	 function getLienImage($promo_id){
		$image = Promo::find($promo_id)->imagePromo()->first();
		return $image['lien'];
	}
}

if (!function_exists('getLienImageAll')) {
	 function getLienImageAll($promo_id){
		$images = Promo::find($promo_id)->imagePromo();
		return $images;
	}
}