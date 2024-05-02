<?php

namespace App\Http\Controllers;

use App\Models\parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parking = parking::all();
        return view('parking.index',compact('parking'));
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
    public function show(parking $parking)
    {
        //
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
}
