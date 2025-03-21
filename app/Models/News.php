<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class News extends Model
{
    use HasFactory;


    protected $fillable = [
        'section_name',
        'section_type',
        'section_content',
    ];

}
