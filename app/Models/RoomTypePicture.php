<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomTypePicture extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_rooms_type',
        'id_picture',
    ];



    public function extracted(\Illuminate\Http\Request $request): void
    {
        $this->id_rooms_type = $request->id_rooms_type;
        $this->id_picture = $request->id_picture;
    }

}
