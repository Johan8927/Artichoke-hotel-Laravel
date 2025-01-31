<?php

namespace Database\Factories;

use App\Models\Heroes;
use App\Models\Pictures;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Heroes>
 */
class HeroesFactory extends Factory
{
    protected $model = Heroes::class;

    public function definition(): array
    {
        return [
            'section_name' => $this->faker->word,
            'section_content' => $this->faker->sentence(15),
            'picture_id' => Pictures::factory(), // Génère une image associée à la clé étrangère
        ];
    }
}
