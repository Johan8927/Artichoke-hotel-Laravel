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
            AmenitiesSeeder::class,
        ]);

        $this->call([
            PicturesSeeder::class,
        ]);

        $this->call([
            RoomsSeeder::class,
        ]);

        $this->call([
            RoomTypesSeeder::class,
        ]);
        //
    }


}
