<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\technicienscontroller;
use App\Http\Controllers\ClientdemandesController;
use App\Http\Controllers\DemandesController;
use App\Http\Controllers\TravailController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ChefEquipeController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\MapsController;


    
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboardchef', function () {
    return view('dashboardchef');
})->middleware(['auth', 'verified'])->name('dashboardchef');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('Techniciens', technicienscontroller::class);
Route::resource('clientdemandes', ClientdemandesController::class);
Route::resource('demandes', DemandesController::class);
Route::resource('parking', ParkingController::class);
Route::resource('travailles', TravailController::class);
Route::resource('stocks', StockController::class);
Route::resource('chefEquipe', ChefEquipeController::class);
Route::resource('parameters', ParametreController::class);

Route::get( '/demandes/detaille/{id}',[DemandesController::class, 'afficher'])->name('detaille.afficher');
Route::get('/demandes/index/{id}/{etat}', [DemandesController::class, 'changeetat'])->name('index.changeetat');

Route::get('clientdemandes/changeEta/{id}/{val}', [DemandesController::class, 'changeEta'])->name('clientdemandes.changeEta');
Route::get('/demandes_affectation', [DemandesController::class, 'affectation'])->name('affectation.affecter');
Route::get('/techniciens/archive/{id}/{etat}', [technicienscontroller::class, 'archive'])->name('technicien.archive');
Route::get('/parking/archive/{id}/{etat}', [ParkingController::class, 'archive'])->name('parking.archive');
Route::get('/parkingindexarch', [ParkingController::class, 'indexarch'])->name('parkingindexarch');
Route::get('/Technicienstecharch', [technicienscontroller::class, 'techarch'])->name('Technicienstecharch');
Route::get('/chefEquipechefarch', [ChefEquipeController::class, 'chefarch'])->name('chefEquipechefarch');
Route::get('/chefEquipe/archive/{id}/{etat}', [ChefEquipeController::class, 'archive'])->name('chefEquipe.archive');
Route::get('/chefEquipechefarch', [ChefEquipeController::class, 'chefarch'])->name('chefEquipearchive');

Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');


Route::resource('prof', ProfilesController::class);

Route::get('myPDF', [PDFController::class,'index'])->name('myPDF');

Route::get('/maps', function () {
    return view('maps');
});

Route::resource('maps', MapsController::class);



require __DIR__.'/auth.php';