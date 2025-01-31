<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomsType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'Description',
        'Maximumcapacity',
        'price',
    ];

    // Relation avec la table 'pictures' pour l'image de la chambre
    public function picture()
    {
        return $this->belongsTo(Pictures::class, 'room_type_pictures_id');
    }
    public function getFillable(): array
    {
        return $this->fillable;
    }
    public function setFillable(array $fillable): void
    {
        $this->fillable = $fillable;
    }
}
