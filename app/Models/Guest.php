<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Guest extends Authenticatable
{


    protected $table = 'guest'; // Nom de la table en base de données

    protected $fillable = [
        'id_user',
        'civility',
        'first_name',
        'last_name',
        'age',
        'nationality',
        'adress',
        'ZIP_code',
        'city',
        'country',
        'phone_number',
        'email',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
