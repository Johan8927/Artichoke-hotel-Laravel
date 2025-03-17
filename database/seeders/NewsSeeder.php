<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    public function run()
    {
        DB::table('news')->insert([
            'section_name' => 'News',
            'section_type' => 'News',
            'section_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget sapien.',
        ]);

    }
}

