<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\LandingPageHero;
use App\Models\LandingPageNews; // Pour les actualités
use App\Models\Room; // Pour les chambres
use App\Models\Pictures; // Si tu as des images spécifiques

/**
 * Controller de la page d'accueil
 */
class LandingPageHeroController extends Controller
{
    /**
     * Afficher la page d'accueil avec les héros, chambres et actualités
     *
     * @return View|Factory
     */
    public function index(): Factory|View
    {
        // Récupérer les données nécessaires pour la vue
        $landingPageHeroes = LandingPageHero::all();
        $room = Room::limit(3)->get(); // Limite à 3 chambres (exemple)
        $news = LandingPageNews::limit(3)->get(); // Limite à 3 actualités (exemple)
        $heroPicture = Pictures::where('name', 'HotelSeeder Exterior')->first(); // Exemple d'image d'hôtel

        // Retourner la vue avec les données
        return view('welcome', [
            'landingPageHeroes' => $landingPageHeroes,
            'room' => $room,
            'news' => $news,
            'heroPicture' => $heroPicture,
        ]);
    }

    /**
     * Afficher un héros spécifique de la landing page.
     *
     * @return View|Factory
     */
    public function show(LandingPageHero $landingPageHero): Factory|View
    {
        return view('pages.landingPageHeroes.show', [
            'landingPageHero' => $landingPageHero,
        ]);
    }

    /**
     * Afficher le formulaire de création pour un nouveau héros de landing page.
     *
     * @return View|Factory
     */
    public function create(): Factory|View
    {
        return view('pages.landingPageHeroes.create', [
            'landingPageHero' => new LandingPageHero,
        ]);
    }

    /**
     * Stocker un nouveau héros de landing page.
     *
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $landingPageHero = new LandingPageHero;
        $landingPageHero->fill($request->all())->save();

        return redirect()->route('landingPageHeroes.show', $landingPageHero->id)
            ->with('message', 'LandingPageHero successfully stored');
    }

    /**
     * Afficher le formulaire pour éditer un héros de landing page.
     *
     * @return View|Factory
     */
    public function edit(LandingPageHero $landingPageHero): Factory|View
    {
        return view('pages.landingPageHeroes.edit', [
            'landingPageHero' => $landingPageHero,
        ]);
    }

    /**
     * Mettre à jour un héros de landing page.
     *
     * @return RedirectResponse
     */
    public function update(Request $request, LandingPageHero $landingPageHero): RedirectResponse
    {
        $landingPageHero->fill($request->all())->save();

        return redirect()->route('landingPageHeroes.show', $landingPageHero->id)
            ->with('message', 'LandingPageHero successfully updated');
    }

    /**
     * Supprimer un héros de landing page.
     *
     * @return RedirectResponse
     */
    public function destroy(LandingPageHero $landingPageHero): RedirectResponse
    {
        $landingPageHero->delete();
        return redirect()->route('landingPageHeroes.index')
            ->with('message', 'LandingPageHero successfully destroyed');
    }
}
