<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    /**
     * Getter pour 'phone_number' : Formater le numéro de téléphone.
     * Exemple : 0123456789 devient 01-23-45-67-89
     */
    public function getPhoneNumberAttribute($value): ?string
    {
        if ($value) {
            // Formater le numéro en groupes de deux chiffres séparés par des tirets
            return preg_replace('/(\d{2})(\d{2})(\d{2})(\d{2})(\d{2})/', '$1-$2-$3-$4-$5', $value);
        }
        return null;
    }

    /**
     * Setter pour 'phone_number' : Nettoyer les caractères non numériques.
     */
    public function setPhoneNumberAttribute($value): void
    {
        // Garder uniquement les chiffres du numéro de téléphone
        $this->attributes['phone_number'] = preg_replace('/\D/', '', $value);
    }

    /**
     * Getter pour 'ZIP_code' : Retourner le code postal en majuscules.
     */
    public function getZIPCodeAttribute($value): string
    {
        // Formater le code postal en majuscules (par sécurité)
        return strtoupper($value);
    }

    /**
     * Setter pour 'email' : Nettoyer et normaliser l'adresse e-mail.
     */
    public function setEmailAttribute($value): void
    {
        // Supprimer les espaces inutiles et convertir l'adresse en minuscule
        $this->attributes['email'] = strtolower(trim($value));
    }

    /**
     * Getter pour 'name' : Formater chaque mot avec une majuscule.
     */
    public function getNameAttribute($value): string
    {
        // Mettre la première lettre de chaque mot en majuscule
        return ucwords(strtolower($value));
    }

    /**
     * Setter pour 'address' : Nettoyer les espaces inutiles dans l'adresse.
     */
    public function setAddressAttribute($value): void
    {
        // Supprimer les espaces en début et en fin de chaîne
        $this->attributes['address'] = trim($value);
    }
}
