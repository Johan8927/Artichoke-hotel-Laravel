<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTypePicturesSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('rooms_type_pictures')->insert([
            'id_rooms_type' => 1,
            'id_pictures' => 1,
        ]);

        DB::table('rooms_type_pictures')->insert([
            'id_rooms_type' => 2,
            'id_pictures' => 2,
        ]);

        DB::table('rooms_type_pictures')->insert([
            'id_rooms_type' => 3,
            'id_pictures' => 3,
        ]);
    }
}
