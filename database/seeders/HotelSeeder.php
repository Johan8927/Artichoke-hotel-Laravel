<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HotelSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Hotel Artichaud',
            'address' => '12 rue de la plage',
            'zip_code' => '64200',
            'city' => 'Biarritz',
            'country' => 'France',
            'phone_number' => '0559595959',
            'email' => 'Artichoke@gmail.com',
        ]);
    }
}




