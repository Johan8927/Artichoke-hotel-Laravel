<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HeroesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('heroes')->insert([
            'section_name' => 'Bienvenue sur notre site',
            'section_content' => 'Découvrez nos offres de locations de vacances',
            'picture_id' => 1,
        ]);
    }

}
