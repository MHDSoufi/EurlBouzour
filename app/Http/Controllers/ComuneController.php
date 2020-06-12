<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Wilaya;

class ComuneController extends Controller
{
    public function commune($id)
    {
        // Retour des villes pour le pays sélectionné 
        return Wilaya::find($id)->comune;
    } 
}
