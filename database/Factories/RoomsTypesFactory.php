<?php

namespace Database\Factories;

use App\Models\RoomsType;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomsTypesFactory extends Factory
{
    /**
     * Le nom du modèle associé à ce factory.
     *
     * @var string
     */
    protected $model = RoomsType::class;

    /**
     * Définir les valeurs par défaut pour les champs du modèle.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(), // Nom unique du type de chambre
            'Description' => $this->faker->sentence(10), // Brève description
            'Maximumcapacity' => $this->faker->numberBetween(1, 10), // Capacité max aléatoire (entre 1 et 10)
            'price' => $this->faker->randomFloat(2, 50, 500), // Prix aléatoire (entre 50 et 500€)
        ];
    }
}
