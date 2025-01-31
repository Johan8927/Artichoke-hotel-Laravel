<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomsType;

class RoomsTypeSeeder extends Seeder
{
    /**
     * Exécute les insertions dans la base de données.
     *
     * @return void
     */
    public function run(): void
    {
        // Crée 20 types de chambres aléatoires
        RoomsType::factory()->count(20)->create();
    }
}
