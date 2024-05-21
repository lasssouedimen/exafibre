<?php

namespace App\Http\Controllers;

use App\Models\Clientdemandes;
use App\Models\Demandes;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notification;
use App\Models\Techniciens;
use App\Models\parking;
use Illuminate\Support\Facades\Auth;

class DemandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientdemandes = Clientdemandes::all();
        return view('demandes.index', compact('clientdemandes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Logique de traitement de la demande

        // Créer une notification
        $user = Auth::user();
        $notification = new Notification();
        $notification->user_id = $user->id;
        $notification->message = 'Nouvelle demande reçue';
        $notification->save();

        return redirect()->back()->with('success', 'Demande envoyée avec succès');
    }


    public function afficher($id)
    {
        $clientdemandes = clientdemandes::find($id);
        return view('demandes.detaille', ['clientdemandes' => $clientdemandes]);
    }

    public function changeEta($id, $val)
    {
        $clientdemandes = clientdemandes::find($id);
        $clientdemandes->etat = $val;
        $clientdemandes->update();
        return redirect()->route('demandes.index');
    }

    public function affectation()
    {   $parkings=parking::where('dispo',0)->get();
        $techniciens = Techniciens::where('dispo',0)->get();
        $clientdemandes = clientdemandes::where('etat',3)->get();
        return view('demandes.affectation', compact('parkings','techniciens','clientdemandes'));
    }



  
}
