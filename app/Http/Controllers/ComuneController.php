<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Wilaya;
use App\Model\Comune;
use Validator;

class ComuneController extends Controller
{
    public function commune($id)
    {
        // Retour des villes pour le pays sélectionné 
        return Wilaya::find($id)->comune;
    } 

    public function communeById($id)
    {
        $wilayaId = Comune::find($id)['wilaya_id'];
        return Wilaya::find($wilayaId)->comune;
    } 

    public function addCommune(Request $request)
    {
    	$rule = array('intitulet' => "required" );
    	$error = Validator::make($request->all(), $rule);

    	if($error->fails()){
    		return response()->json(["errors" => 'Veuiller entrer l\'intitulet de la commune']);
    	}
    	Comune::create([
    		'intitulet' => $request->intitulet,
    		'intituletAr' => $request->intitulet,
    		'Wilaya_id' => $request->wilayaId
    	]);

    	return response()->json(['success' => "La Commune a été ajoutée avec succé", "idWilaya" => $request->wilayaId]);
    }
}
 