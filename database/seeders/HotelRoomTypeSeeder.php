<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelRoomTypeSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            HotelRoomTypeSeeder::class,
        ]);
    }
}
