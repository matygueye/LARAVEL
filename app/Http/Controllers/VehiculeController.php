<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;
use Illuminate\Support\Facades\Storage;

class VehiculeController extends Controller
{  

    public function liste_vehicule()
    {
        // Récupérer tous les véhicules depuis la base de données
        $vehicules = Vehicule::all();

        // Passer les données des véhicules à la vue
        return view('vehicule.liste', compact('vehicules'));
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
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
        ]);

        // Téléchargement de l'image et stockage dans le répertoire "public/images"
        $imagePath = $request->file('image')->store('public/storage/images');

        // Récupération du nom du fichier
        $imageName = basename($imagePath);

        // Création du véhicule avec le chemin de l'image
        $vehicule = new Vehicule();
        $vehicule->type = $request->type;
        $vehicule->date_achat = $request->date_achat;
        $vehicule->defaut = $request->defaut;
        $vehicule->matricule = $request->matricule;
        $vehicule->chauffeur = $request->chauffeur;
        $vehicule->statut = $request->statut;
        $vehicule->image = $imageName; // Stockage du nom de l'image
        $vehicule->save();

        return redirect('/ajouter')->with('success', 'Véhicule ajouté avec succès!');
    }
}
