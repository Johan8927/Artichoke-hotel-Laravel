<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'address',
        'ZIP_code',
        'city',
        'country',
        'phone_number',
        'email',
    ];

    // Getter pour l'attribut 'phone_number' - Formater le numéro de téléphone
    public function getPhoneNumberAttribute($value)
    {
        // Exemple de formatage de numéro de téléphone
        return preg_replace('/(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/', '$1-$2-$3-$4-$5', $value);
    }

    // Setter pour l'attribut 'phone_number' - Assurer que le numéro de téléphone est bien formaté (enlever les espaces ou caractères spéciaux)
    public function setPhoneNumberAttribute($value)
    {
        // Enlever tous les caractères non numériques pour garder uniquement les chiffres
        $this->attributes['phone_number'] = preg_replace('/\D/', '', $value);
    }

    // Getter pour l'attribut 'ZIP_code' - Retourner le code postal sous un format spécifique (par exemple, avec un espace)
    public function getZIPCodeAttribute($value)
    {
        return strtoupper($value);  // Formate le code postal en majuscules
    }

    // Setter pour l'attribut 'email' - Valider l'email avant de le sauvegarder
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower(trim($value));  // Mettre l'email en minuscule et enlever les espaces
    }

    // Getter pour l'attribut 'name' - Formater le nom de l'hôtel avec une première lettre majuscule
    public function getNameAttribute($value)
    {
        return ucwords(strtolower($value));  // Première lettre de chaque mot en majuscule
    }

    // Setter pour l'attribut 'address' - S'assurer qu'il n'y a pas d'espaces inutiles
    public function setAddressAttribute($value)
    {
        $this->attributes['address'] = trim($value);  // Enlever les espaces en début et fin de chaîne
    }
}
