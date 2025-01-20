<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\LandingPageHero;
use App\Models\Pictures;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LandingPageHero>
 */
class LandingPageHeroFactory extends Factory
{
    protected $model = LandingPageHero::class;

    public function definition()
    {
        return [
            'section_name' => $this->faker->word,
            'section_content' => $this->faker->sentence(15),
            'picture_id' => Pictures::factory(), // Génère une image associée à la clé étrangère
        ];
    }
}
