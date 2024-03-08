<?php

namespace App\Http\Controllers;

use App\Models\Clientdemandes;
use App\Models\Demandes;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class DemandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientdemandes = Clientdemandes::all();
        return view('demandes.index',compact('clientdemandes'));
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

    public function valider()
    {
        return view('demandes.affectation');
        
    }

    public function afficher($id)
    {
        $clientdemandes = clientdemandes::find($id);
        return view('demandes.detaille', ['clientdemandes' => $clientdemandes]);
    
        
    }
   
    public function changeetat($id, $etat)
{
    $clientdemande = Clientdemandes::find($id);

    if (!$clientdemande) {
        // Gérer le cas où la demande n'est pas trouvée
        // Vous pouvez retourner une vue d'erreur ou rediriger l'utilisateur
    }

    // Mettre à jour l'état en fonction de la valeur passée
    switch ($etat) {
        case 0:
            $clientdemande->etat = "En cours";
            break;
        case 1:
            $clientdemande->etat = "Refusée";
            break;
        case 2:
            $clientdemande->etat = "Validée";
            break;
        default:
            // Gérer le cas où l'état n'est pas reconnu
            // Vous pouvez retourner une vue d'erreur ou rediriger l'utilisateur
    }

    // Sauvegarder les modifications
    $clientdemande->save();

    // Rediriger ou retourner une vue appropriée
    return view('demandes.detaille', ['clientdemande' => $clientdemande]);
}


    /**
     * Display the specified resource.
     */
    public function show(Demandes $demandes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demandes $demandes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Demandes $demandes)
    {
        //
    }
}
