<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    public function run()
    {
        DB::table('rooms')->insert([
            'id_rooms_type' => 1,
            'id_hotel' => 1,
            'rooms_number' => 101,
        ]);
        //
    }

}
