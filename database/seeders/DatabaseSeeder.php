<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Vérification et création d'un utilisateur spécifique
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('password'), // Ajout d'un mot de passe pour l'utilisateur
            ]);
        }
        $this->call([
            PicturesSeeder::class,
            LandingPageNewsSeeder::class,
            AmenitiesSeeder::class,
            LandingPageHeroSeeder::class,
            RoomTypeSeeder::class,

        ]);
        // Création de 5 hôtels et leurs chambres associées
        Hotel::factory(5)->create()->each(function (Hotel $hotel) {
            // Création de 10 chambres pour chaque hôtel
            Room::factory(10)->create([
                'hotel_id' => $hotel->id, // Associer les chambres à l'hôtel courant
            ]);
        });
    }
}
