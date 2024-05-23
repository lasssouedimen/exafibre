<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use App\Models\connexiontechniciens;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\Travail;
use App\Models\Clientdemandes;

class ApiController extends Controller
{
 
    public function login(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $connexiontechniciens = DB::table('connexiontechniciens')->where([['email', $data['email']], ['mot_passe', $data['mot_passe']]])->first();
        if (isset($connexiontechniciens)) {
         
            $techniciens = connexiontechniciens::where('code_technicien', $connexiontechniciens->code_technicien)->first();
            $jwt_token = auth()->guard('api')->claims(['code' => $connexiontechniciens->code_technicien])->login($techniciens);
            return response()->json([
                'techniciens' => $techniciens,
                'token' => $jwt_token,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], Response::HTTP_UNAUTHORIZED);
        }


    }
    public function getTravailDetails(Request $request, $id)
    {
        $travail = Travail::with(['demandes:id,prenom,nomfamille,telephone,ville,pays', 'parkings:id,Marque,Matricule'])->find($id);

        if (!$travail) {
            return response()->json([
                'success' => false,
                'message' => 'Travail non trouvé',
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'success' => true,
            'travail' => $travail,
        ]);
    }

    public function updateClientDemandeState(Request $request, $id)
    {
        $demande = Clientdemandes::find($id);
    
        if (!$demande) {
            return response()->json([
                'success' => false,
                'message' => 'Demande non trouvée',
            ], Response::HTTP_NOT_FOUND);
        }
    
        $demande->etat = 4;
        $demande->save();
    
        return response()->json([
            'success' => true,
            'message' => 'État de la demande mis à jour avec succès',
        ]);
    }
    

}