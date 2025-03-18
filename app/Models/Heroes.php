<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modèle pour représenter les héros de la page d'accueil.
 */
class Heroes extends Model
{
    use HasFactory;



    /**
     * Attributs pouvant être remplis via une requête (mass assignable).
     */
    protected $fillable = [
        'section_name',
        'section_content',
        'id_picture',
    ];



    // Method for extract data from request
    public function extracted(\Illuminate\Http\Request $request, Heroes $hero): void
    {
        $hero->section_name = $request->section_name;
        $hero->section_content = $request->section_content;
        $hero->id_picture = $request->id_picture;
        $hero->save();
    }
}
