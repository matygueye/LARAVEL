<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/vehicule', [VehiculeController::class, 'liste_vehicule']);
Route::get('/ajouter', [VehiculeController::class, 'ajouter_vehicule']);
Route::post('/ajouter/traitement', [VehiculeController::class, 'ajouter_vehicule_traitement']);
Route::put('/vehicule/{id}', [VehiculeController::class, 'update'])->name('vehicule.update');

Route::get('/vehicule/{id}/edit', [VehiculeController::class, 'edit'])->name('vehicule.edit');
Route::put('/vehicule/{id}', [VehiculeController::class, 'update'])->name('vehicule.update');
Route::delete('/vehicule/{id}', [VehiculeController::class, 'destroy'])->name('vehicule.delete');


