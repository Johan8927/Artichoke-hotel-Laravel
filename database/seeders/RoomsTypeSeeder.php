<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTypeSeeder extends Seeder
{
    public function run(): void{

        DB::table('rooms_type')->insert([
            'name' => 'Chambre standard',
            'Description' => 'Chambre simple avec un lit simple',
            'Maximumcapacity' => 1,
            'price' => 250,
        ]);

        DB::table('rooms_type')->insert([
            'name' => 'Chambre de luxe',
            'Description' => 'Chambre de luxe avec un lit double',
            'Maximumcapacity' => 2,
            'price' => 549,
        ]);

        DB::table('rooms_type')->insert([
            'name' => 'Suite',
            'Description' => 'Suite avec deux lits doubles et un balcon',
            'Maximumcapacity' => 4,
            'price' => 1200,
        ]);
    }
}
