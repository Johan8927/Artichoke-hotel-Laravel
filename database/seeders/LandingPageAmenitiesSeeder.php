<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LandingPageAmenities;

class LandingPageAmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $landingPageAmenities = [
            [
                'section_name' =>'Demi-pension (soir)',
                'section_content'=>'75€/personne/jour',
                'price'=>75,
                'picture_id'=>1
            ],
            [
                'section_name' =>'Demi-pension (soir)',
                'section_content'=>'75€/personne/jour',
                'price'=>75,
                'picture_id'=>1
            ],
            [
                'section_name' =>'Demi-pension (soir)',
                'section_content'=>'75€/personne/jour',
                'price'=>75,
                'picture_id'=>1
            ],
            [
                'section_name' =>'Demi-pension (soir)',
                'section_content'=>'75€/personne/jour',
                'price'=>75,
                'picture_id'=>1
            ]
        ];
        foreach ($landingPageAmenities as $landingPageAmenity) {
            LandingPageAmenities::create($landingPageAmenity);
        }
    }
}
