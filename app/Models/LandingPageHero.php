<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LandingPageHero extends Model
{
    use HasFactory;
    protected $table = 'landing_page_hero';
    protected $fillable = [
        'section_name',
        'section_content',
        'picture_id',
    ];
    public function picture(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Pictures::class);
    }
}
