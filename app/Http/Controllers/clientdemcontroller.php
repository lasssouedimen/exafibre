<?php

namespace App\Http\Controllers;

use App\Models\clientdem;
use Illuminate\Http\Request;

class clientdemcontroller extends Controller
{
    public function index ()
    {    
        return view('clients.clientdem');
    }
}
