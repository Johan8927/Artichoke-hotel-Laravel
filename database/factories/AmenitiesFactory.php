<?php

namespace Database\Factories;

use App\Models\Amenities;
use Illuminate\Database\Eloquent\Factories\Factory;

class AmenitiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Amenities::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'id_picture' => $this->faker->numberBetween(1, 10),
            'content' => $this->faker->sentence(10),

        ];
    }
}
