<?php

namespace App\Http\Controllers;

use App\Models\PDF as ModelsPDF;
use Illuminate\Http\Request;
use App\Models\stock;
use Dompdf\Dompdf;
use PDF;
use PDO;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $stocks = stock::all();
        return view("pdf.PDF", compact('stocks'));
   
    }
    public function generatePDF()
    {
        $data = [
            'title' => 'MRT ENERGIE ',
            'date' => date('m/d/Y'),
            
        ]; 

        $pdf = pdf::loadView('pdf.index', $data);
     
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
