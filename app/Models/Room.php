<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'type_id',
        'number',
        'capacity',
        'is_available',
        'description',
    ];

}
