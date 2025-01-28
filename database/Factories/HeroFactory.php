<?php

namespace Database\Factories;

use App\Models\Hero;
use App\Models\Pictures;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Hero>
 */
class HeroFactory extends Factory
{
    protected $model = Hero::class;

    public function definition(): array
    {
        return [
            'section_name' => $this->faker->word,
            'section_content' => $this->faker->sentence(15),
            'picture_id' => Pictures::factory(), // Génère une image associée à la clé étrangère
        ];
    }
}
