<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modèle pour représenter les chambres.
 */
class Room extends Model
{
    use HasFactory;

    /**
     * Attributs pouvant être remplis via une requête (mass assignable).
     */
    protected $fillable = [
        'id_hotel',
        'id_rooms_type',
        'rooms_number',
    ];

    // Method for find room by id
    public static function find($id)
    {
        return self::query()->find($id);
    }




}
