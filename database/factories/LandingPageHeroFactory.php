<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\LandingPageHero;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LandingPageHeroFactory extends Factory
{
    protected $model = LandingPageHero::class;

    public function definition()
    {
        return [
            'section_name' => $this->faker->word,
            'section_content' => $this->faker->sentence(15),
            'picture_id' => \App\Models\Pictures::factory(),
        ];
    }
}
