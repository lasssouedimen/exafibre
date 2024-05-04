<?php

namespace App\Http\Controllers;

use App\Models\Clientdemandes;
use Illuminate\Http\Request;

class ClientdemandesController extends Controller
{
    public function index()
    {
        $clientdemandes = Clientdemandes::all();
        return view('clients.clientdem',compact('clientdemandes'));
    }
    public function create()
    {
        return view('clients.adddem');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientdemandes = clientdemandes::create([
            'prenom'=>$request->prenom,
            'nomfamille'=>$request->nomfamille,
            'telephone'=>$request->telephone,
            'mail'=>$request->mail,
            'ville'=>$request->ville,
            'pays'=>$request->pays,
            'codepostal'=>$request->codepostal,
            'remarque'=>$request->remarque,
           ]);
           $message = $request->prenom . ' merci pour votre confiance. Votre demande a été envoyée !'; 
         return redirect(route('clientdemandes.index'))->with('message', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientdemandes $clientdemandes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clientdemandes $clientdemandes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientdemandes $clientdemandes)
    {
        //
    }
}
