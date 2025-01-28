<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Exécuter les seeders.
     *
     * @return void
     */
    public function run(): void
    {
        News::factory()->count(10)->create();
    }
}
