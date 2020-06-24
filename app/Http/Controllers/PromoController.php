<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreatPromoRequest;
use Illuminate\Support\Facades\Storage;
use App\Model\Promo;
use App\Model\ImagesPromo;
use Session;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promos = Promo::all();
        return view('promotion.liste_promo', ['promos' => $promos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promotion.create_promo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatPromoRequest $request)
    {
        
    $id = Promo::create([ 
                'nom_promo' => $request->name,
                'nom_promo_AR' => $request->name,
                'description' => $request->description,
                'descriptionAR' => $request->description,
                'adr' => $request->adr,
                'adr_AR' => $request->adr,
                'longitude' => $request->lg,
                'lontitude' => $request->lt,
                'comune_id' => $request->comune,
                'user_id' => 1

    ])->id;
    $promo = Promo::find($id);
    foreach ($request->comodite as $comodite) {
        $promo->comodites()->attach($comodite);
    }
    $img = explode(",", $request->imgs);
    foreach ($img as $image) {
        ImagesPromo::create([
            'lien' => $image,
            'promo_id' => $id,
        ]);
    } 
    echo $id; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promo = Promo::findOrFail($id);
        //dd($user);
        return view('promotion.show_promo', ['promo'=>$promo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $promo = Promo::findOrFail($id);
      return view('promotion.edit_promo', ['promo' => $promo]);
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
       if(isset($request->Descrip)){
        Promo::where('id', $id)->update([
            'description' => $request->Descrip,
        ]);
        Session::flash('message', 'La description a été modifier');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('promo.edit', $id));
       }
        if(isset($request->namePromo)){
        Promo::where('id', $id)->update([
            'nom_promo' => $request->namePromo,
        ]);
        Session::flash('message', 'Le titre a été modifier');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('promo.edit', $id));
       }

        if(isset($request->adrPromo) && isset($request->comune)){
        Promo::where('id', $id)->update([
            'adr' => $request->adrPromo,
            'comune_id' => $request->comune,
        ]);
        Session::flash('message', 'L\'adresse a été modifier');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('promo.edit', $id));
       }
       if(isset($request->Comodite)){
        $promo = Promo::findOrFail($id);
        foreach ($request->Comodite as $comodite) {
        $promo->comodites()->attach($comodite);
        }
        Session::flash('message', 'Les Comodiées ont été ajoutés');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('promo.edit', $id));
       }
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
