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
			"section_name" => $this->faker->words(5,true),
			"section_content" => $this->faker->words(5,true),
			"price" => $this->faker->randomNumber(),
			"picture_id" => $this->faker->randomNumber(),

        ];
    }
}
