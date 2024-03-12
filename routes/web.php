<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\technicienscontroller;
use App\Http\Controllers\ClientdemandesController;
use App\Http\Controllers\DemandesController;
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
Route::get( '/demandes/detaille/{id}',[DemandesController::class, 'afficher'])->name('detaille.afficher');
Route::get('/demandes/index/{id}/{etat}', [DemandesController::class, 'changeetat'])->name('index.changeetat');

Route::get('clientdemandes/changeEta/{id}/{val}', [DemandesController::class, 'changeEta'])->name('clientdemandes.changeEta');
Route::get('/demandes.affectation', [DemandesController::class, 'valider'])->name('affectation.valider');


require __DIR__.'/auth.php';
