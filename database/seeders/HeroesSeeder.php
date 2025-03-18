<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HeroesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('heroes')->insert([
            'section_name' => 'Hero',
            'section_content' => 'https://www.travelmanagers.com.au/wp-content/uploads/2023/06/AdobeStock_286563877-1.jpeg',
            'id_picture' => 11,
        ]);
    }
}
