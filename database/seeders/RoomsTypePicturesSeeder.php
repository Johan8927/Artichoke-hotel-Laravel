<?php

namespace Database\Seeders;

use App\Models\RoomsTypePicture;

class RoomsTypePicturesSeeder
{
    /**
     * Exécuter les seeders.
     *
     * @return void
     */
    public function run(): void
    {
        // Créer 20 images de chambres aléatoires
        RoomsTypePicture::factory()->count(20)->create();
    }

}
