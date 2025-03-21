<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

DB::table('amenities')->insert([
            'name' => 'Formule demi-pension ',
            'id_picture' => 1,
            'content' => '(soir - 75€/personne/jour)',
        ]);

DB::table('amenities')->insert([
            'name' => 'Formule pension complète',
            'id_picture' => 2,
            'content' => '(midi et soir - 150€/personne/jour)',
        ]);

DB::table('amenities')->insert([
            'name' => 'Formule petit-déjeuner',
            'id_picture' => 3,
            'content' => '(matin - 45€/personne/jour)',
        ]);

DB::table('amenities')->insert([
            'name' => 'Service de pressing tout-compris',
            'id_picture' => 4,
            'content' => '(250€/personne/jour)',
        ]);

DB::table('amenities')->insert([
            'name' => 'Pack High Tech',
            'id_picture' => 5,
            'content' => '(100€/semaine), mise à disposition d’un ordinateur personnel, batteries externes, chargeurs sans fil dans la chambre et autres services.',
        ]);

DB::table('amenities')->insert([
            'name' => 'Internet Fibre haut débit',
            'id_picture' => 6,
            'content' => '(25€ en une fois)',
        ]);

DB::table('amenities')->insert([
            'name' => 'Conciergerie',
            'id_picture' => 7,
            'content' => 'incluse dans le prix de la chambre ou de la suite, il faudra que le client puisse indiquer, s’ il le souhaite, des demandes particulières pour la conciergerie.',
        ]);

DB::table('amenities')->insert([
            'name' => 'Accès illimité au SPA et massages',
            'id_picture' => 8,
            'content' => '(400€/Semaine)',
        ]);

DB::table('amenities')->insert([
            'name' => 'Service voiturier',
            'id_picture' => 9,
            'content' => '(45€ / jour)',
        ]);

DB::table('amenities')->insert([
            'name' => 'All Inclusive',
            'id_picture' => 10,
            'content' => 'Avec tous les services inclus, le tarif sera négocié avec le client lors du check-out.',
        ]);
    }
}
