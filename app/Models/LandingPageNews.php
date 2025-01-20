<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LandingPageNews extends Model
{
    use HasFactory;


    protected $fillable = [
        'section_name',
        'section_content',
    ];
}
