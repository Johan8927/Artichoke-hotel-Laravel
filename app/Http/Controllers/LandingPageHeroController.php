<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\LandingPageHero;
use App\Models\LandingPageNews;
use App\Models\Room;
use App\Models\Pictures;

/**
 * Contrôleur pour la gestion de la page LandingPageHero
 */
class LandingPageHeroController extends Controller
{
    /**
     * Afficher la page principale avec les données nécessaires.
     *
     * @return Factory|View
     */
    public function index(): Factory|View
    {
        $landingPageHeroes = LandingPageHero::all();
        $rooms = Room::limit(3)->get();
        $news = LandingPageNews::limit(3)->get();
        $heroPicture = Pictures::where('name', 'HotelSeeder Exterior')->first();

        return view('landingPageHero.index', compact('landingPageHeroes', 'rooms', 'news', 'heroPicture'));
    }

    /**
     * Afficher un héros spécifique.
     *
     * @param LandingPageHero $landingPageHero
     * @return Factory|View
     */
    public function show(LandingPageHero $landingPageHero): Factory|View
    {
        return view('pages.landingPageHeroes.show', compact('landingPageHero'));
    }

    /**
     * Afficher le formulaire de création pour un nouveau héros.
     *
     * @return Factory|View
     */
    public function create(): Factory|View
    {
        return view('pages.landingPageHeroes.create');
    }

    /**
     * Stocker un nouveau héros.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
        ]);

        $landingPageHero = LandingPageHero::create($request->all());

        return redirect()->route('landingpageheroes.show', $landingPageHero->id)
            ->with('message', 'Héros créé avec succès.');
    }

    /**
     * Afficher le formulaire pour modifier un héros.
     *
     * @param LandingPageHero $landingPageHero
     * @return Factory|View
     */
    public function edit(LandingPageHero $landingPageHero): Factory|View
    {
        return view('pages.landingPageHeroes.edit', compact('landingPageHero'));
    }

    /**
     * Mettre à jour un héros existant.
     *
     * @param Request $request
     * @param LandingPageHero $landingPageHero
     * @return RedirectResponse
     */
    public function update(Request $request, LandingPageHero $landingPageHero): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
        ]);

        $landingPageHero->update($request->all());

        return redirect()->route('landingpageheroes.show', $landingPageHero->id)
            ->with('message', 'Héros mis à jour avec succès.');
    }

    /**
     * Supprimer un héros.
     *
     * @param LandingPageHero $landingPageHero
     * @return RedirectResponse
     */
    public function destroy(LandingPageHero $landingPageHero): RedirectResponse
    {
        $landingPageHero->delete();

        return redirect()->route('landingpageheroes.index')
            ->with('message', 'Héros supprimé avec succès.');
    }
}
