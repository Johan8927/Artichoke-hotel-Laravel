<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Amenities extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'id_picture',
        'content',
    ];

    // Method to find id of amenity
    public static function find($id)
    {
        return self::query()->find($id);
    }

    // Method for extract data from request
    public function extracted(\Illuminate\Http\Request $request, Amenities $amenity): void
    {
        $amenity->name = $request->name;
        $amenity->id_picture = $request->id_picture;
        $amenity->content = $request->content;
        $amenity->save();
    }
}
