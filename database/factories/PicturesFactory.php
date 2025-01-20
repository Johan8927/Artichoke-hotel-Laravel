<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pictures;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PicturesFactory extends Factory
{
    protected $model = Pictures::class;

    public function definition(): array
    {
        $images = [
            // Image principale de l'hôtel (pour la landingPageHero)
            [
                'name' => 'Hotel Image',
                'path' => 'https://via.placeholder.com/1200x800.png?text=Hotel+Landing+Page', // Image de l'hôtel
            ],
            // Images pour les services (landingPageAmenities)
            [
                'name' => 'Demi-pension',
                'path' => 'https://via.placeholder.com/800x600.png?text=Demi-pension', // Image pour la demi-pension
            ],
            [
                'name' => 'Pension complète',
                'path' => 'https://via.placeholder.com/800x600.png?text=Pension+complète', // Image pour la pension complète
            ],
            [
                'name' => 'Petit déjeuner',
                'path' => 'https://via.placeholder.com/800x600.png?text=Petit+déjeuner', // Image pour le petit déjeuner
            ],
            [
                'name' => 'Service de pressing',
                'path' => 'https://via.placeholder.com/800x600.png?text=Pressing', // Image pour le service de pressing
            ],
            [
                'name' => 'Pack High Tech',
                'path' => 'https://via.placeholder.com/800x600.png?text=Pack+High+Tech', // Image pour le pack High Tech
            ],
            [
                'name' => 'Internet Fibre',
                'path' => 'https://via.placeholder.com/800x600.png?text=Internet+Fibre', // Image pour Internet Fibre
            ],
            [
                'name' => 'Conciergerie',
                'path' => 'https://via.placeholder.com/800x600.png?text=Conciergerie', // Image pour la conciergerie
            ],
            [
                'name' => 'SPA et massages',
                'path' => 'https://via.placeholder.com/800x600.png?text=SPA+et+massages', // Image pour le SPA et les massages
            ],
            [
                'name' => 'Service voiturier',
                'path' => 'https://via.placeholder.com/800x600.png?text=Service+Voiturier', // Image pour le service voiturier
            ],
            // Images pour les types de chambres
            [
                'name' => 'Chambre Standard',
                'path' => 'https://via.placeholder.com/800x600.png?text=Chambre+Standard', // Image pour la chambre standard
            ],
            [
                'name' => 'Chambre de luxe',
                'path' => 'https://via.placeholder.com/800x600.png?text=Chambre+de+Luxe', // Image pour la chambre de luxe
            ],
            [
                'name' => 'Suite',
                'path' => 'https://via.placeholder.com/800x600.png?text=Suite', // Image pour la suite
            ],
        ];

        return $images[array_rand($images)];
    }
}
