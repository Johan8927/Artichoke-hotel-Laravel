<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_Room',
        'id_RoomType',
        'id_Hotel',
        'RoomNumber',
    ];

    // Getter pour l'attribut 'is_available' - Formate la valeur avant de la renvoyer
    public function getIsAvailableAttribute($value): string
    {
        // Par exemple, retourner "Oui" si disponible, "Non" sinon
        return $value ? 'Disponible' : 'Indisponible';
    }

    // Setter pour l'attribut 'description' - Assure que la description est bien formatée avant d'être enregistrée
    public function setDescriptionAttribute($value): void
    {
        // Par exemple, supprimer les espaces en trop
        $this->attributes['description'] = trim($value);
    }

    // Getter pour l'attribut 'number' - Retourne le numéro sous un format spécifique
    public function getNumberAttribute($value): string
    {
        return sprintf('Chambre %s', $value);  // Exemple : "Chambre 101"
    }

    // Setter pour l'attribut 'capacity' - S'assurer que la capacité est toujours un entier
    public function setCapacityAttribute($value): void
    {
        $this->attributes['capacity'] = (int)$value;  // Conversion en entier
    }
}
