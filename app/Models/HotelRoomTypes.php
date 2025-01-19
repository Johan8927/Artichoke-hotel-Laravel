<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HotelRoomTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'capacity',
        'price',
        'room_type_pictures_id',
    ];

    // Relation avec la table 'pictures' pour l'image de la chambre
    public function picture()
    {
        return $this->belongsTo(Pictures::class, 'room_type_pictures_id');
    }
}
