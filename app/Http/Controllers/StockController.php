<?php

namespace App\Http\Controllers;

use App\Models\stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        $stocks = stock::all();
        return view('stocks.index',compact('stocks'));

    }
    public function create()
    {
        return view('stocks.add');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $sto=stock::create([
            'date'=>$request->date,
            'libellé'=>$request->libellé,
            'qte'=>$request->qte,
            'prixunitaire'=>$request->prixunitaire,
            'valeur'=>$request->valeur,
            'qte1'=>$request->qte1,
            'prixunitaire1'=>$request->prixunitaire1,
            'valeur1'=>$request->valeur1,
            'qte2'=>$request->qte2,
            'prixunitaire2'=>$request->prixunitaire2,
            'valeur2'=>$request->valeur2,
           ]);
           
         return redirect(route('stocks.index')); 
    }

    /**
     * Display the specified resource.
     */
    public function show(stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stock $stock)
    {
        //
    }
}
