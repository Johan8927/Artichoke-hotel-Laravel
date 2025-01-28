<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;

class HotelController extends Controller
{
    /**
     * Affiche une liste paginée des hôtels.
     *
     * @param Request $request
     * @return View|Factory
     */
    public function index(Request $request): Factory|View
    {
        // Récupérer les hôtels avec pagination
        $hotels = Hotel::paginate(10);

        // Retourner la vue avec les hôtels
        return view('pages.hotel.index', compact('hotels'));
    }

    /**
     * Affiche un hôtel spécifique.
     *
     * @param Hotel $hotel
     * @return View|Factory
     */
    public function show(Hotel $hotel): Factory|View
    {
        // Retourner la vue avec l'hôtel spécifique
        return view('pages.hotel.show', compact('hotel'));
    }

    /**
     * Affiche le formulaire pour créer un nouvel hôtel.
     *
     * @return View|Factory
     */
    public function create(): Factory|View
    {
        // Retourner la vue avec une instance vide de l'hôtel
        return view('pages.hotel.create', ['hotel' => new Hotel]);
    }

    /**
     * Enregistre un nouvel hôtel dans la base de données.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Valider les données de la requête
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'ZIP_code' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        // Créer un nouvel hôtel avec les données validées
        $hotel = Hotel::create($validated);

        // Rediriger vers la page de l'hôtel avec un message de succès
        return redirect()->route('hotel.show', $hotel->id)->with('message', 'Hôtel créé avec succès.');
    }

    /**
     * Affiche le formulaire pour modifier un hôtel existant.
     *
     * @param Hotel $hotel
     * @return View|Factory
     */
    public function edit(Hotel $hotel): Factory|View
    {
        // Retourner la vue avec l'hôtel à modifier
        return view('pages.hotel.edit', compact('hotel'));
    }

    /**
     * Met à jour un hôtel dans la base de données.
     *
     * @param Request $request
     * @param Hotel $hotel
     * @return RedirectResponse
     */
    public function update(Request $request, Hotel $hotel): RedirectResponse
    {
        // Valider les données de la requête
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'ZIP_code' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        // Mettre à jour l'hôtel avec les données validées
        $hotel->update($validated);

        // Rediriger vers la page de l'hôtel avec un message de succès
        return redirect()->route('hotels.show', $hotel->id)->with('message', 'Hôtel mis à jour avec succès.');
    }

    /**
     * Supprime un hôtel de la base de données.
     *
     * @param Hotel $hotel
     * @return RedirectResponse
     */
    public function destroy(Hotel $hotel): RedirectResponse
    {
        // Supprimer l'hôtel
        $hotel->delete();

        // Rediriger vers la liste des hôtels avec un message de succès
        return redirect()->route('hotels.index')->with('message', 'Hôtel supprimé avec succès.');
    }
}
