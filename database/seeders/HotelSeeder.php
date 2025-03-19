<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HotelSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('hotel')->insert([
            'name' => 'Hotel Artichaud',
            'address' => '12 rue de la plage',
            'city' => 'Biarritz',
            'zip_code' => '64200',
            'country' => 'France',
            'phone_number' => '0559595959',
            'email' => 'Artichoke@gmail.com',
        ]);
    }
}




