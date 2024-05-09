<?php

namespace App\Http\Controllers;

use App\Models\Techniciens;
use App\Models\Travail;
use Illuminate\Http\Request;

class technicienscontroller extends Controller
{

    public function index()
    {
        $techniciens = Techniciens::where('arch', 0)->get();
        return view('Techniciens.indexTec', compact('techniciens'));
    }
    public function techarch()
    {
        $techniciens = Techniciens::where('arch', 1)->get();
        return view('Techniciens.techarch', compact('techniciens'));
    }

    public function create()
    {
        return view('Techniciens.addtec');
    }

    public function store(Request $request)
    {
        $tech = Techniciens::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'Adresse' => $request->Adresse,
            'Tel' => $request->Tel,
            'Age' => $request->Age,
            'Datedébut' => $request->Datedébut,
            'mail' => $request->mail,
        ]);
        $message = $request->nom . ' crée avec succée !';
        return redirect(route('Techniciens.index'))->with('message', $message);
    }

    public function edit($id)
    {
        $technicien = Techniciens::find($id);
        return view('Techniciens.edittec', compact('technicien'));
    }
    public function show($id)
    {
        $technicien = Techniciens::find($id);
        $travailles = Travail::where('id_technicien', $id)->get();
        return view('Techniciens.historique', compact('technicien','travailles'));
    }


    public function update(Request $request, Techniciens $Technicien)
    {
        $Technicien->update($request->all());

        return redirect()->route('Techniciens.index')->with('modifier');
    }

    public function destroy(Techniciens $technicien)
    {
        $technicien->delete();
        return redirect()->route('Techniciens.index')->with('success', 'techniciens  supprimer');
    }
    public function archive($id, $etat)
    {
        $technicien = techniciens::find($id);
        $technicien->arch = $etat;
        $technicien->update();
        return redirect()->route('Techniciens.index')->with('success', 'techniciens  archiver');
    }
}
