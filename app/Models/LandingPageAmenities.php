<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LandingPageAmenities extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_name',
        'section_content',
        'price',
        'picture_id',
    ];


    public function picture()
    {
        return $this->belongsTo(Pictures::class);
    }
}
