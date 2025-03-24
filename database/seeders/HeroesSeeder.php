<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HeroesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('heroes')->insert([
            'section_name' => 'Hotel Artichaut',
            'section_content' => 'Welcome to our provençal resort, with our amenities ready for use',
            'id_picture' => 11,
        ]);
    }
}
