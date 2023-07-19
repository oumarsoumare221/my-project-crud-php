<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormateurController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/formateurs', [FormateurController::class, 'index']);
Route::get('/formateurs/ajouter', [FormateurController::class, 'showForm']);
Route::post('/formateurs/ajouter', [FormateurController::class, 'ajouterFormateur']);
Route::get('/formateurs/{id}/modifier', [FormateurController::class, 'modifierFormateur'])->name('formateurs.modifier');
Route::any('/formateurs/{id}', [FormateurController::class, 'updateFormateur'])->name('formateurs.update');
Route::delete('/formateurs/{id}', [FormateurController::class, 'supprimerFormateur'])->name('formateurs.supprimer');

