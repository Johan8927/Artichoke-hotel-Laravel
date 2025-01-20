<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pictures;

class PicturesSeeder extends Seeder
{
    public function run()
    {
        Pictures::create([
            'name' => 'HotelSeeder Exterior',
            'path' => 'images/hotel-exterior.jpg',
        ]);

        Pictures::create([
            'name' => 'Swimming Pool',
            'path' => 'images/swimming-pool.jpg',
        ]);

        Pictures::create([
            'name' => 'Spa and Wellness',
            'path' => 'images/spa-wellness.jpg',
        ]);

        Pictures::create([
            'name' => 'Gym',
            'path' => 'images/gym.jpg',
        ]);
    }
}
