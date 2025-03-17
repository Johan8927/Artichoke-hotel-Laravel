<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTypeSeeder extends Seeder
{
    public function run(): void{

        DB::table('rooms_type')->insert([

            'name' => 'Chambre simple',
            'Description' => 'Chambre simple avec un lit simple',
            'Maximumcapacity' => 1,
            'price' => 50,

        ]);
    }
}
