<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'type_id',
        'number',
        'capacity',
        'is_available',
        'description',
    ];

    // Getter pour l'attribut 'is_available' - Formate la valeur avant de la renvoyer
    public function getIsAvailableAttribute($value)
    {
        // Par exemple, retourner "Oui" si disponible, "Non" sinon
        return $value ? 'Oui' : 'Non';
    }

    // Setter pour l'attribut 'description' - Assure que la description est bien formatée avant d'être enregistrée
    public function setDescriptionAttribute($value)
    {
        // Par exemple, supprimer les espaces en trop
        $this->attributes['description'] = trim($value);
    }

    // Getter pour l'attribut 'number' - Retourne le numéro sous un format spécifique
    public function getNumberAttribute($value)
    {
        return sprintf('Chambre %s', $value);  // Exemple : "Chambre 101"
    }

    // Setter pour l'attribut 'capacity' - S'assurer que la capacité est toujours un entier
    public function setCapacityAttribute($value)
    {
        $this->attributes['capacity'] = (int)$value;  // Conversion en entier
    }
}
