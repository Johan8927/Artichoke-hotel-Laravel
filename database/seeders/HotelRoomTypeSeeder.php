<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HotelRoomTypes;
use App\Models\Pictures;
use Faker\Factory as Faker;

class HotelRoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créer une instance de Faker pour générer des données fictives
        $faker = Faker::create();

        // Ajouter 10 exemples de types de chambres
        for ($i = 0; $i < 10; $i++) {
            // Trouver une image dans la table 'pictures'
            $pictureId = Pictures::inRandomOrder()->first()->id;

            // Créer une nouvelle entrée dans la table 'hotel_room_types'
            HotelRoomTypes::create([
                'name' => $faker->word, // Nom de la chambre (ex. 'Chambre standard')
                'content' => $faker->sentence(20), // Description de la chambre
                'capacity' => $faker->numberBetween(1, 5), // Capacité de la chambre (1 à 5 personnes)
                'price' => $faker->randomFloat(2, 50, 300), // Prix de la chambre (entre 50 et 300)
                'room_type_pictures_id' => $pictureId, // ID d'une image de la chambre tirée de la table 'pictures'
            ]);
        }
    }
}
