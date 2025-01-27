<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'id_RoomType' => $this->faker->numberBetween(1, 5), // ID de type de chambre aléatoire (à ajuster selon vos RoomTypes existants)
            'id_Hotel' => $this->faker->numberBetween(1, 10), // ID d'hôtel aléatoire (à ajuster selon vos hôtels existants)
            'RoomNumber' => $this->faker->unique()->numberBetween(1, 500), // Numéro de chambre unique
            'name' => $this->faker->word(), // Nom aléatoire de la chambre
            'description' => $this->faker->sentence(), // Description aléatoire
            'price' => $this->faker->randomFloat(2, 50, 500), // Prix entre 50 et 500
            'capacity' => $this->faker->numberBetween(1, 6), // Capacité entre 1 et 6 personnes
        ];
    }
}
