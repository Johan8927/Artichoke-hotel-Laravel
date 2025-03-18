<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Hotel extends Model
{
    use HasFactory;

    // Les colonnes autorisées pour les insertions ou mises à jour massives
    protected $fillable = [
        'name',
        'address',
        'ZIP_code',
        'city',
        'country',
        'phone_number',
        'email',
    ];

    // Method for find id for hotel
    public static function find($id)
    {
        return self::query()->find($id);
    }

    // Méthode pour extraire les données du Request et les assigner à l'objet Hotel'
    public function extracted(\Illuminate\Http\Request $request, Hotel $hotel): void
    {
        $hotel->name = $request->name;
        $hotel->address = $request->address;
        $hotel->ZIP_code = $request->ZIP_code;
        $hotel->city = $request->city;
        $hotel->country = $request->country;
        $hotel->phone_number = $request->phone_number;
        $hotel->email = $request->email;
        $hotel->save();
    }

}
