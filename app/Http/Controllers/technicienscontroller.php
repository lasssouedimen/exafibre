<?php

namespace App\Http\Controllers;

use App\Models\Techniciens;
use Illuminate\Http\Request;

class technicienscontroller extends Controller
{
    
    public function index ()
    {
        $techniciens = Techniciens::all();
        return view('Techniciens.indexTec',compact('techniciens'));
    }
   

    public function create()
    {
        return view('Techniciens.addtec');
    }

    public function store(Request $request)
    {   
        $tech=Techniciens::create([
            'nom'=>$request->nom,
            'Adresse'=>$request->Adresse,
            'Tel'=>$request->Tel,
            'Age'=>$request->Age,
            'Datedébut'=>$request->Datedébut,
            'mail'=>$request->mail,
           ]);
           $message = $request->nom . ' crée avec succée !'; 
         return redirect(route('Techniciens.index'))->with('message', $message);
    }

    public function edit(Techniciens $technicien)
{  
     $techniciens = Techniciens::all();
    return view('Techniciens.edittec', compact('techniciens'));
    
}
public function show(Techniciens $technicien)
{
  $technicien = Techniciens::find($technicien);
}


public function update(Request $request, Techniciens $Technicien )
{
    $Technicien->update($request->all());  
 
    return redirect()->route('Techniciens.index')->with('modifier');
   
}

public function destroy(Techniciens $technicien)
{
    $technicien->delete();
    return redirect()->route('Techniciens.index')->with('success','techniciens  supprimer');

}
}