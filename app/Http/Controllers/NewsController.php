<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Afficher la liste des actualités.
     *
     * @return Factory|View
     */
    public function index(): Factory|View
    {
        $news = News::all();
        return view('pages.news.index', compact('news'));
    }

    /**
     * Afficher une actualité spécifique.
     *
     * @param News $news
     * @return Factory|View
     */
    public function show(News $news): Factory|View
    {
        return view('pages.news.show', compact('news'));
    }

    /**
     * Afficher le formulaire de création pour une nouvelle actualité.
     *
     * @return Factory|View
     */
    public function create(): Factory|View
    {
        return view('pages.news.create');
    }

    /**
     * Stocker une nouvelle actualité.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'section_name' => 'required|string|max:255',
            'section_content' => 'nullable|string',
        ]);

        $news = News::create($request->all());

        return redirect()->route('news.show', $news->id)
            ->with('message', 'Actualité créée avec succès.');
    }

    /**
     * Afficher le formulaire pour modifier une actualité.
     *
     * @param News $news
     * @return Factory|View
     */
    public function edit(News $news): Factory|View
    {
        return view('pages.news.edit', compact('news'));
    }

    /**
     * Mettre à jour une actualité existante.
     *
     * @param Request $request
     * @param News $news
     * @return RedirectResponse
     */
    public function update(Request $request, News $news): RedirectResponse
    {
        $request->validate([
            'section_name' => 'required|string|max:255',
            'section_content' => 'nullable|string',
        ]);

        $news->update($request->all());

        return redirect()->route('news.show', $news->id)
            ->with('message', 'Actualité mise à jour avec succès.');
    }

    /**
     * Supprimer une actualité.
     *
     * @param News $news
     * @return RedirectResponse
     */
    public function destroy(News $news): RedirectResponse
    {
        $news->delete();

        return redirect()->route('news.index')
            ->with('message', 'Actualité supprimée avec succès.');
    }
}
