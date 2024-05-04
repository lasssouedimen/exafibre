<?php

namespace App\Http\Controllers;
use App\Models\Clientdemandes;
use App\Models\Travail;
use App\Models\Techniciens;
use App\Models\parking;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TravailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $travailles = Travail::all();
        return view('travailles.index',compact('travailles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
       Travail::create([
            'id_demande'=>$request->id_demande,
            'id_technicien'=>$request->id_technicien,
            'id_parking' => $request->id_parking,
            'datedebut'=> Carbon::now(),
            
        ]);
        $technicien=Techniciens::find($request->id_technicien);
        $technicien->dispo = 1;
        $technicien->update();
        $parking=parking::find($request->id_parking);
        $parking->dispo = 1;
        $parking->update();
        $clientdemandes=Clientdemandes::find($request->id_demande);
        $clientdemandes->etat = 2;
        $clientdemandes->update();
       return redirect()->route("affectation.affecter");
    }

    /**
     * Display the specified resource.
     */
    public function show(Travail $travail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Travail $travail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travail $travail)
    {
        //
    }
}
