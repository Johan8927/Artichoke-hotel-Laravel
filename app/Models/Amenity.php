<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Amenity extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'id_picture',
        'content',
    ];


    // Method for extract data from request
    public function extracted(\Illuminate\Http\Request $request, Amenity $amenity): void
    {
        $amenity->name = $request->name;
        $amenity->id_picture = $request->id_picture;
        $amenity->content = $request->content;
        $amenity->save();
    }
}
