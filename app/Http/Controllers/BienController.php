<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Biens;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biens = Biens::all();
        return view ('bien.liste_bien', [ 'biens' => $biens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bien.create_bien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $intitulet = "Bien";
        $surface = "";
        if ($request->type == "Bureau") {
           $intitulet = "Bureau Commercial";
           $surface = $request->surface;
        }elseif ($request->type == "Local") {
            $intitulet = "Local Commercial";
            $surface = $request->surface;
        }elseif ($request->type == "Place") {
            $request->type == "Place de parkin";
            $surface = 0;
        }else{
            $intitulet = $request->intitulet;
            $surface = $request->surface;
        }
        /*$id = Biens::create([
            "intitulet" => $intitulet,
            "type" => $request->type,
            "surface" => $surface,
            "prix" => $request->prix
        ])->id;*/

        dd($request->promotion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
