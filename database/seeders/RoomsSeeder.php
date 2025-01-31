<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rooms;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crée 5 chambres avec des données aléatoires
        Rooms::factory()->count(5)->create();
    }
}
