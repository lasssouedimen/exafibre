<?php

namespace App\Http\Controllers;
use App\Models\StockMovement;
use Illuminate\Http\Request;

class StockMovementController extends Controller
{
    public function index()
    {
        $movements = StockMovement::all();
        return view('stock_movements.index', compact('movements'));
    }
    public function create()
    {
        return view('stock_movements.create');
    }

    public function store(Request $request)
    {
        StockMovement::create($request->all());
        return redirect()->route('stock_movements.index');
    }
}

