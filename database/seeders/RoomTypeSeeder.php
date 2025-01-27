<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomTypes;

class RoomTypeSeeder extends Seeder
{
    /**
     * Exécute les insertions dans la base de données.
     *
     * @return void
     */
    public function run(): void
    {
        // Crée 20 types de chambres aléatoires
        RoomTypes::factory()->count(20)->create();
    }
}
