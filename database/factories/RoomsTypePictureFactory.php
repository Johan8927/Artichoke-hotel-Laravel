<?php

namespace Database\Factories;

use App\Models\RoomsTypePicture;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomsTypePictureFactory extends Factory
{
    protected $model = RoomsTypePicture::class;

    public function definition(): array
    {
        return [
            'id_rooms_type' => $this->faker->numberBetween(1, 20),
            'id_pictures' => $this->faker->numberBetween(1, 20),

        ];
    }
}
