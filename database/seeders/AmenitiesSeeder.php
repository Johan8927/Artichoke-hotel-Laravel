<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Amenities;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crée 10 instances de 'Amenities' à l'aide de la factory
        \App\Models\Amenities::factory(10)->create();
    }
}
