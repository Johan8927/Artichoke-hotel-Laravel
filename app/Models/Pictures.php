<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Request;


class Pictures extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
    ];
}
