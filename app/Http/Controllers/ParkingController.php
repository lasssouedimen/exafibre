<?php

namespace App\Http\Controllers;

use App\Models\parking;
use App\Models\Travail;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parking = parking::where('arch',0)->get();
        return view('parking.index',compact('parking'));
    }
    public function indexarch()
    {
        $parking = parking::where('arch',1)->get();
        return view('parking.indexarch',compact('parking'));
    }
    public function create()
    {
        return view('parking.addvehicule');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $park=parking::create([
            'Marque'=>$request->Marque,
            'codegps'=>$request->codegps,
            'Matricule'=>$request->Matricule,
            'kilométrage'=>$request->kilométrage,
           
           ]);
         
         return redirect(route('parking.index'))->with('cree');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $parking = parking::find($id);
        $travailles = Travail::where('id_parking', $id)->get();
        return view('parking.historique', compact('parking','travailles'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, parking $parking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(parking $parking)
    {
        
    $parking->delete();
    return redirect()->route('parking.index')->with('success');
    }
    public function archive($id , $etat){
        $parking = parking::find($id);
        $parking->arch=$etat;
        $parking->update();
        return redirect()->route('parking.index')->with('success','voiture  archiver');
    
    }
}
