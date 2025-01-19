<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Pictures extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
    ];

    public function landingPageHeroes()
    {
        return $this->hasMany(LandingPageHero::class);
    }
    public function landingPageAmenities(){
        return $this->hasMany(LandingPageAmenities::class);
    }
}
