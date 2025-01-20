<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // Nom aléatoire
            'description' => $this->faker->sentence(), // Description aléatoire
            'price' => $this->faker->randomFloat(2, 50, 500), // Prix entre 50 et 500
            'capacity' => $this->faker->numberBetween(1, 6), // Capacité entre 1 et 6
            'hotel_id' => 1, // Utilisez un ID d'hôtel existant ou ajoutez une logique pour le générer dynamiquement
        ];
    }
}
