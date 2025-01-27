<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modèle pour représenter les héros de la page d'accueil.
 */
class LandingPageHero extends Model
{
    use HasFactory;

    // Utilise le trait pour les usines de modèles.

    /**
     * Attributs pouvant être remplis via une requête (mass assignable).
     */
    protected $fillable = [
        'section_name',        // Titre du héros.
        'section_content',  // Description du héros.
        'picture_id',        // Chemin ou URL de l'image associée au héros.
    ];
}
