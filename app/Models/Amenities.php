<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Amenities extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'id_picture',
        'content',
    ];


    /**
     * Relation "appartient à" avec le modèle Pictures.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function picture(): BelongsTo
    {
        return $this->belongsTo(Pictures::class, 'id_picture');
    }
}
