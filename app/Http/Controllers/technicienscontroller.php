<?php

namespace App\Http\Controllers;

use App\Models\Techniciens;
use Illuminate\Http\Request;

class technicienscontroller extends Controller
{
    
    public function index ()
    {
        return view('Techniciens.indexTec');
    }

    public function create()
    {
        return view('Techniciens.addtec');
    }

    public function store(Request $request)
    {    
        $request->validate([
            'Nom'=> 'required',
            'Adresse'=> 'required',
            'Tel'=> 'required',
            'Age'=> 'required',
            'Datedébut'=> 'required',
            'Email'=> 'required',
     
      ]);
  

       Techniciens::create($request->post());
         return redirect(route('techniciens.index'))->with('success', 'crée avec succée !');
    }
 /*   

    public function edit(promotions $promotion)
{  
     $promotions = promotions::all();
     $abonnements = Abonnements::where('arch',0)->get();
    return view('gestion-Promotion.edtpro', compact('promotions','abonnements'));
    
}
public function show(promotions $promotion)
{
  $promotion = promotions::find($promotion);
}


public function update(Request $request, Promotions $Promotion )
{
    $Promotion->update($request->all());       
    return redirect()->route('Promotions.index');
   
}

public function destroy(Promotions $Promotion)
{
    $Promotion->delete();
    return redirect()->route('Promotions.index')->with('success','promo supprimer');
}*/
}
