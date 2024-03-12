<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;

class VehiculeController extends Controller
{  

    public function liste_vehicule()
    {
        return view('vehicule.liste');
    }
    public function ajouter_vehicule()
    {
        return view('vehicule.ajouter');
    }
    public function ajouter_vehicule_traitement(Request $request)
{
    $request->validate([
        'type' => 'required',
        'date_achat' => 'required',
        'defaut' => 'required',
        'matricule' => 'required',
        'chauffeur' => 'required',
        'statut' => 'required',
    ]);
        $vehicule = new Vehicule();
        $vehicule->type = $request->type;
        $vehicule->date_achat = $request->date_achat;
        $vehicule->defaut = $request->defaut;
        $vehicule->matricule = $request->matricule;
        $vehicule->chauffeur_id = $request->chauffeur_id;
        $vehicule->statut = $request->statut;
        $vehicule->save();

        return redirect('/ajouter')->with('success', 'Vehicule ajouté avec succès!');
    }
}
