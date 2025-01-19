<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pictures;

class PicturesSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pictures::factory(12)->create();
    }
}
