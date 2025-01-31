<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modèle pour représenter les chambres.
 */
class Rooms extends Model
{
    use HasFactory;

    /**
     * Attributs pouvant être remplis via une requête (mass assignable).
     */
    protected $fillable = [
        'id_RoomType',         // Nom de la chambre.
        'id_Hotel',  // Description de la chambre.
        'RoomNumber',        // Prix de la chambre.
    ];

    public static function limit(int $int): \LaravelIdea\Helper\App\Models\_IH_Room_C|array|\Closure|Rooms|null
    {

        return self::select('id_RoomType', 'id_Hotel', 'RoomNumber')->limit($int)->get($keys = null);

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
