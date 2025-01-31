<?php

namespace Database\Seeders;

class RoomsPicturesSeeder
{
    /**
     * Exécuter les seeders.
     *
     * @return void
     */
    public function run(): void
    {
        // Créer 20 images de chambres aléatoires
        RoomsPictures::factory()->count(20)->create();
    }

}
