<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Insérer des données dans la table 'hotel'
        DB::table('hotel')->insert([
            'name' => 'Artichoke Hotel',
            'address' => '123 Artichoke St.',
            'zip_code' => '12345',
            'city' => 'Artichoke City',
            'country' => 'Artichoke Land',
            'phone_number' => '123-456-7890',
            'email' => 'contact@artichokehotel.com',
        ]);

        // Exécuter les autres seeders
        $this->call([
            RoomsTypeSeeder::class,
            AmenitiesSeeder::class,
            NewsSeeder::class,
            HeroesSeeder::class,
            PicturesSeeder::class,
            RoomsTypePicturesSeeder::class,
            RoomsSeeder::class,
        ]);
    }
}
