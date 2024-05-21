<?php

namespace App\Http\Controllers;

use App\Models\ChefEquipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class ChefEquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chefequipe = chefEquipe::where('arch', 0)->get();
        return view('chefEquipe.index', compact('chefequipe'));
    }
    public function chefarch()
    {
        $chefequipe = chefEquipe::where('arch', 1)->get();
        return view('chefEquipe.chefarch', compact('chefequipe'));
    }
    public function create()
    {
        return view('chefEquipe.chefadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $chef = chefEquipe::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'Adresse' => $request->Adresse,
            'Tel' => $request->Tel,
            'Age' => $request->aujAge,
            'Datedébut' => $request->Datedébut,
            'mail' => $request->mail,
        ]);
        $user = User::where('email', $request->mail)->first();

        if ($user) {

            return redirect()->back()->with('error', 'An account with this email already exists.');
        } else {


            User::create([
                'name' => $request->nom . ' ' . $request->prenom,
                'email' => $request->mail,
                'password' => Hash::make($request->Tel),
                'role' => 1,
            ]);
        
            $data = [
                'name' => $request->nom . ' ' . $request->prenom,
                'email' => $request->mail,
                'password'=>$request->Tel,
               ];
        Mail::to($request->mail)->send(new WelcomeEmail($data));

        $message = $request->nom . ' crée avec succée !';
        return redirect(route('chefEquipe.index'))->with('message', $message);}
    }


    public function edit($id)
    {
        $chefequipe = chefEquipe::find($id);
        return view('chefEquipe.index', compact('chefequipe'));
    }
    public function show(ChefEquipe $chefEquipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChefEquipe $chefEquipe)
    {

        $chefEquipe->update($request->all());

        return redirect()->route('chefEquipe.index')->with('modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChefEquipe $chefEquipe)
    {
        //
    }
    public function archive($id, $etat)
    {
        $chefequipe = chefEquipe::find($id);
        $chefequipe->arch = $etat;
        $chefequipe->update();
        return redirect()->route('chefEquipe.index')->with('success', 'chefequipe  archiver');
    }
}
