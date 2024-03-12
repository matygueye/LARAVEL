<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'date_achat',
        'defaut',
        'matricule',
        'chauffeur_id',
        'statut',
    ];
}