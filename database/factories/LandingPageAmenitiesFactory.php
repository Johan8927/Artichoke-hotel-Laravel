<?php

namespace Database\Factories;

use App\Models\LandingPageAmenities;
use App\Models\Pictures;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LandingPageAmenitiesFactory extends Factory
{
    protected $model = LandingPageAmenities::class;

    public function definition()
    {
        // Liste des services et leurs prix
        $amenities = [
            'Demi-pension (soir)' => '75€/personne/jour',
            'Pension complète (midi+soir)' => '150€/personne/jour',
            'Petit déjeuner (matin)' => '45€/personne/jour',
            'Service de pressing tout-compris' => '250€/personne/jour',
            'Pack High Tech (100€/semaine)' => '100€/semaine',
            'Internet Fibre haut débit' => '25€ en une fois',
            'Conciergerie' => 'Inclus dans le prix de la chambre',
            'Accès illimité au SPA et massages' => '400€/semaine',
            'Service voiturier' => '45€/jour',
        ];


        $services = [];
        foreach ($amenities as $section_name => $section_content) {

            $price = filter_var($section_content, FILTER_SANITIZE_NUMBER_INT);


            $services[] = [
                'id' => LandingPageAmenities::factory(),
                'section_name' => $section_name,
                'section_content' => $section_content,
                'price' => $price,
                'picture_id' => Pictures::factory(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }


        return $services;
    }
}
