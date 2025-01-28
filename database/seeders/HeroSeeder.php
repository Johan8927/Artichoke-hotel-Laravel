<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Exécuter les seeders.
     *
     * @return void
     */
    public function run(): void
    {
        Hero::factory()->count(10)->create();
    }
}
