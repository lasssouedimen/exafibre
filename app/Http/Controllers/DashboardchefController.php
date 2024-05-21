<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ChefEquipe;
use App\Models\Techniciens;
use App\Models\Clientdemandes;
use App\Models\parking;

use Illuminate\Support\Facades\DB;

class DashboardchefController extends Controller
{
    public function index()
    {
 /* cardouwet */
 $nbTech = Techniciens::where('arch', 0)->count();
 $nbPjEnc = Clientdemandes::whereIn('etat', [3, 2])->count();
 $nbVoiture = parking::where('arch', 0)->count();

    }
}
