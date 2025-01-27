<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Amenities extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'id_picture',
    ];


    public function picture()
    {
        return $this->belongsTo(Pictures::class);
    }
}
