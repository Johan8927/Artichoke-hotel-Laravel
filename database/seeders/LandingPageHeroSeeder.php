<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LandingPageHero;

class LandingPageHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LandingPageHero::factory(1)->create(
            ['section_name'=>'Hotel Artichaut',
                'section_content'=>'An escape to the gorgeous lavender fields',
                'picture_id'=>1,
                ]
        );
    }
}
