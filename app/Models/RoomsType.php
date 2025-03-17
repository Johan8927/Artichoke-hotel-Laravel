<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomsType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'maximumcapacity',
        'price',
    ];

    // Relation avec la table 'pictures' pour l'image de la chambre
    public function picture(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Pictures::class, 'rooms_type_pictures_id');
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
