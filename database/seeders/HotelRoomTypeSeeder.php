<?php

namespace Database\Seeders;

use App\Models\HotelRoomTypes;
use App\Models\Pictures;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelRoomTypeSeeder extends Seeder
{

    public function run(): void
    {
        $hotelRoomTypes = [
            [
                'name' => 'Chambre Standard',
                'content' => 'Chambre simple et confortable, idéale pour un séjour en toute simplicité. Chambre située dans les étages 1 à 3, avec vue sur l\'horizon.',
                'capacity' => 3,
                'price' => 250.00,
                'room_type_pictures_id' => Pictures::factory(),
            ],
            [
                'name' => 'Chambre de luxe',
                'content' => 'Chambre spacieuse et raffinée, avec un mobilier élégant et une vue imprenable. Parfait pour une expérience haut de gamme.',
                'capacity' => 3,
                'price' => 549.00,
                'room_type_pictures_id' => Pictures::factory(),
            ],
            [
                'name' => 'Suite',
                'content' => 'Suite luxueuse offrant des prestations exceptionnelles. Grande salle de bain, espace salon et terrasse privée.',
                'capacity' => 3,
                'price' => 1200.00,
                'room_type_pictures_id' => Pictures::factory(),
            ],
        ];
        foreach ($hotelRoomTypes as $hotelRoomType) {
            HotelRoomTypes::create($hotelRoomType);
        }
    }
}
