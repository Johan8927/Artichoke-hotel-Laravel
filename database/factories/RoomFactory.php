<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'id_Room' => $this->faker->unique()->randomNumber(5),
            'id_RoomType' => $this->faker->unique()->randomNumber(5),
            'id_Hotel' => $this->faker->unique()->randomNumber(5),
            'RoomNumber' => $this->faker->unique()->randomNumber(5),

        ];
    }
}
