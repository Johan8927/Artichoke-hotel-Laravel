<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\LandingPageNews;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LandingPageNewsFactory extends Factory
{
    protected $model = LandingPageNews::class;

    public function definition()
    {
        return [
            'section_name' => $this->faker->sentence(3), // Génère un titre court pour l'article
            'section_content' => $this->faker->paragraph(5), // Génère le contenu de l'article
        ];
    }
}
