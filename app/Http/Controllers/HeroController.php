<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Hero;
use App\Models\News;
use App\Models\Room;
use App\Models\Pictures;

class HeroController extends Controller
{
    /**
     * Afficher la page principale avec les données nécessaires.
     *
     * @return Factory|View
     */
    public function index(): Factory|View
    {
        $heroes = Hero::all();
        $news = News::all();
        $rooms = Room::all();
        $pictures = Pictures::all();

        return view('pages.hero.index', compact('heroes', 'news', 'rooms', 'pictures'));
    }

    /**
     * Afficher un héros spécifique.
     *
     * @param Hero $hero
     * @return Factory|View
     */
    public function show(Hero $hero): Factory|View
    {
        return view('pages.hero.show', compact('hero'));
    }

    /**
     * Afficher le formulaire de création pour un nouveau héros.
     *
     * @return Factory|View
     */
    public function create(): Factory|View
    {
        return view('pages.hero.create');
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
            'section_name' => 'required|string|max:255',
            'section_content' => 'nullable|string',
            'picture_id' => 'nullable|integer|exists:pictures,id',
        ]);

        $hero = Hero::create($request->all());

        return redirect()->route('hero.show', $hero->id)
            ->with('message', 'Héros créé avec succès.');
    }

    /**
     * Afficher le formulaire pour modifier un héros.
     *
     * @param Hero $hero
     * @return Factory|View
     */
    public function edit(Hero $hero): Factory|View
    {
        return view('pages.hero.edit', compact('hero'));
    }

    /**
     * Mettre à jour un héros existant.
     *
     * @param Request $request
     * @param Hero $hero
     * @return RedirectResponse
     */
    public function update(Request $request, Hero $hero): RedirectResponse
    {
        $request->validate([
            'section_name' => 'required|string|max:255',
            'section_content' => 'nullable|string',
            'picture_id' => 'nullable|integer|exists:pictures,id',
        ]);

        $hero->update($request->all());

        return redirect()->route('hero.show', $hero->id)
            ->with('message', 'Héros mis à jour avec succès.');
    }

    /**
     * Supprimer un héros.
     *
     * @param Hero $hero
     * @return RedirectResponse
     */
    public function destroy(Hero $hero): RedirectResponse
    {
        $hero->delete();

        return redirect()->route('hero.index')
            ->with('message', 'Héros supprimé avec succès.');
    }
}
