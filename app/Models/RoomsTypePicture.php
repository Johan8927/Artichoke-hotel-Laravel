<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomsTypePicture extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_room_type',
        'id_picture',
    ];

    public function picture()
    {
        return $this->belongsTo(Pictures::class);
    }

    public function roomType()
    {
        return $this->belongsTo(RoomsType::class);
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
