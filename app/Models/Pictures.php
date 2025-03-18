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

    //Method to find a picture by its id
    public static function find($id)
    {
        return self::query()->find($id);
    }
}
