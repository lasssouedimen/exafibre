<?php

namespace App\Http\Controllers;

use App\Models\maps;
use App\Models\Clientdemandes;
use Illuminate\Http\Request;


class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $demandes = Clientdemandes::all();
            return view('maps.maps', compact('demandes'));
        
    }
    public function showMap()
{
    $locations = Clientdemandes::all();
    return view('maps.maps', compact('locations'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // Utiliser une API de géocodage pour obtenir les coordonnées
        $coordinates = $this->getCoordinates($request->pays_demande, $request->ville_demande);

        Clientdemandes::create([
            'pays_demande' => $request->pays_demande,
            'ville_demande' => $request->ville_demande,
            'latitude' => $coordinates['latitude'],
            'longitude' => $coordinates['longitude'],
        ]);

        return view('maps.maps');

    }

    /**
     * Display the specified resource.
     */
    public function show(maps $maps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, maps $maps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(maps $maps)
    {
        //
    }
    private function getCoordinates($country, $city)
    {
        // Utilisez une API de géocodage pour obtenir les coordonnées
        // Exemples : Google Maps Geocoding API, OpenStreetMap Nominatim API, etc.
        // Voici un exemple simplifié sans appel réel à une API

        $coordinates = [
            'latitude' => 0.0, // Remplacez par les coordonnées réelles
            'longitude' => 0.0 // Remplacez par les coordonnées réelles
        ];

        return $coordinates;
    }
}
    

