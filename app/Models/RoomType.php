<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomType extends Model
{


    protected $fillable = [
        'name',
        'description',
        'maximumcapacity',
        'price',
    ];


// Method to extract the room type

    public function extracted(\Illuminate\Http\Request $request, RoomType $roomType): void
    {
        $roomType->name = $request->name;
        $roomType->description = $request->description;
        $roomType->maximumcapacity = $request->maximumcapacity;
        $roomType->price = $request->price;
        $roomType->save();
    }
}
