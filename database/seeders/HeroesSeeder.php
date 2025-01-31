<?php

namespace Database\Seeders;

use App\Models\Heroes;
use Illuminate\Database\Seeder;

class HeroesSeeder extends Seeder
{
    /**
     * Exécuter les seeders.
     *
     * @return void
     */
    public function run(): void
    {
        Heroes::factory()->count(10)->create();
    }
}
