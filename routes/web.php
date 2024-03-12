<?php

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
Route::get('/ajouter/traitement', [VehiculeController::class, 'ajouter_vehicule_traitement']);
