<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'civility' => 'Mr',
            'firstName' => 'Johan',
            'lastName' => 'Bertrand',
            'password' => 'password',
            'address' => '12 rue de la plage',
            'ZIP_code' => '74150',
            'city' => 'Annecy',
            'country' => 'France',
            'phone_number' => '0559595959',
            'email' => 'johan.bertrand@le-campus-numerique.fr',
            'admin_status' => true,
            'client_status' => 'active',
            'email_verified_at' => now(),
]);
}
}
