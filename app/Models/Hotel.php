<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable =[
        'name',
        'address',


        'created_at',
        'updated_at',
        'deleted_at',
        'user_id',
        'country_id',
        'city_id',
        'currency_id'

    ]
}
