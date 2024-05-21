<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ChefEquipe;
use App\Models\Techniciens;
use App\Models\Clientdemandes;
use App\Models\parking;
use App\Models\stock;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        /* cardouwet */
        $nbChefEq = ChefEquipe::where('arch', 0)->count();
        $nbTech = Techniciens::where('arch', 0)->count();
        $nbPjEnc = Clientdemandes::whereIn('etat', [3, 2])->count();
        $nbVoiture = parking::where('arch', 0)->count();

        //courb1
        //LineChart courbe
        $end = Carbon::now();
        $start = Carbon::now()->subMonths(6);
        $vente = stock::select(DB::raw('sum(valeur1)  as sum'), DB::raw('MONTH(created_at) month'))
            ->whereBetween('created_at', [$start, $end])
            ->whereNull('qte')
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();
        $venteMonths = $vente->map(function ($item) {
            return Carbon::createFromDate(null, $item->month)->format('F');
        })->toArray();
        $venteSums = $vente->pluck('sum')->toArray();

        $achat = stock::select(DB::raw('sum(valeur)  as sum'), DB::raw('MONTH(created_at) month'))
            ->whereBetween('created_at', [$start, $end])
            ->where('valeur1', 0)
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();
        $achatMonths = $achat->map(function ($item) {
            return Carbon::createFromDate(null, $item->month)->format('F');
        })->toArray();
        $achatSums = $achat->pluck('sum')->toArray();

        //courbe2
        $nbPjEnC = Clientdemandes::where('etat', 2)->count();
        $nbPjAffect = Clientdemandes::where('etat', 3)->count();

        //courbe 3
        $end = Carbon::now();
        $start = Carbon::now()->subMonths(12);
        $accepter = Clientdemandes::select(DB::raw('COUNT(*) as sum'), DB::raw('MONTH(created_at) as month'))
            ->whereBetween('created_at', [$start, $end])
            ->whereIn('etat', [2, 3])
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'), 'asc')
            ->get();
        $accepterMonths = $accepter->map(function ($item) {
            return Carbon::createFromDate(null, $item->month)->format('F');
        })->toArray();
        $accepterSums = $accepter->pluck('sum')->toArray();

        $refuser = Clientdemandes::select(DB::raw('COUNT(*) as sum'), DB::raw('MONTH(created_at) as month'))
            ->whereBetween('created_at', [$start, $end])
            ->where('etat',1)
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'), 'asc')
            ->get();
        $refuserMonths = $refuser->map(function ($item) {
            return Carbon::createFromDate(null, $item->month)->format('F');
        })->toArray();
        $refuserSums = $refuser->pluck('sum')->toArray();

        return view('dashboard', compact('nbChefEq', 'nbTech', 'nbPjEnc', 'nbVoiture', 'venteSums', 'achatSums', 'achatMonths', 'nbPjEnC', 'nbPjAffect','accepterSums','refuserSums','refuserMonths'));
    }
}
