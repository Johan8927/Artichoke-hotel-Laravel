<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            PicturesSeeder::class,
            AmenitiesSeeder::class,
            HotelSeeder::class,
            RoomsTypeSeeder::class,
            RoomsTypePicturesSeeder::class,
            RoomsSeeder::class,
            HeroesSeeder::class,
            NewsSeeder::class,
        ]);
    }
}
