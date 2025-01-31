<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Le nom du modèle correspondant.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Définir l'état par défaut pour le modèle.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'section_name' => $this->faker->sentence(3),
            'section_content' => $this->faker->paragraph(),
        ];
    }
}
