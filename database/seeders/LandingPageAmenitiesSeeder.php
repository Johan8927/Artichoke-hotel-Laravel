<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LandingPageAmenities;
use Illuminate\Support\Facades\DB;

class LandingPageAmenitiesSeeder extends Seeder
{
    public function run()
    {
        LandingPageAmenities::create([
            'section_name' => 'Free WiFi',
            'section_content' => 'Enjoy high-speed internet throughout the hotel for free.',
            'price' => 0.00,
            'picture_id' => 1, // Assurez-vous qu'une image avec cet ID existe dans la table `pictures`.
        ]);

        LandingPageAmenities::create([
            'section_name' => 'Swimming Pool',
            'section_content' => 'Relax in our outdoor pool with a stunning view.',
            'price' => 10.00,
            'picture_id' => 2,
        ]);

        LandingPageAmenities::create([
            'section_name' => 'Spa & Wellness',
            'section_content' => 'Rejuvenate your body and mind with our spa services.',
            'price' => 50.00,
            'picture_id' => 3,
        ]);

        LandingPageAmenities::create([
            'section_name' => 'Gym',
            'section_content' => 'State-of-the-art fitness equipment available 24/7.',
            'price' => 0.00,
            'picture_id' => 4,
        ]);
    }
}
