<?php

namespace App\Models;

use Database\Factories\RoomTypePictureFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomTypePicture extends Model
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
        return $this->belongsTo(RoomType::class);
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
