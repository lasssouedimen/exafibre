<?php

namespace App\Http\Controllers;

use App\Models\PDF;
use Illuminate\Http\Request;
use App\Models\stock;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = stock::all();
        return view("pdf.PDF");
   
    }
    public function generatePDF()
    {
        $data = [
            'title' => 'MRT ENERGIE ',
            'date' => date('m/d/Y'),
            
        ]; 
            
        $pdf = PDF::loadView('pdf.PDF', $data);
     
        return $pdf->download('facture.pdf');
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PDF $pDF)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PDF $pDF)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PDF $pDF)
    {
        //
    }
}
