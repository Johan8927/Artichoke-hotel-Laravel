<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\RoomType;
use Illuminate\View\View;

class RoomsTypeController extends Controller
{
    /**
     * Affiche une liste paginée des types de chambres.
     *
     * @param Request $request
     * @return View|Factory
     */
    public function index(Request $request): Factory|View
    {
        $roomTypes = RoomType::paginate(10);

        return view('pages.roomTypes.index', compact('roomTypes'));
    }

    /**
     * Affiche un type de chambre spécifique.
     *
     * @param RoomType $roomType
     * @return View|Factory
     */
    public function show(RoomType $roomType): Factory|View
    {
        return view('pages.roomTypes.show', compact('roomType'));
    }

    /**
     * Affiche le formulaire pour créer un nouveau type de chambre.
     *
     * @return View|Factory
     */
    public function create(): Factory|View
    {
        return view('pages.roomTypes.create', [
            'roomType' => new RoomType,
        ]);
    }

    /**
     * Enregistre un nouveau type de chambre dans la base de données.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Valider les données de la requête
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'Description' => 'nullable|string|max:1000',
            'Maximumcapacity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        // Créer le type de chambre
        $roomType = RoomType::create($validated);

        return redirect()->route('hotelRoomTypes.show', $roomType->id)
            ->with('message', 'Type de chambre créé avec succès.');
    }

    /**
     * Affiche le formulaire pour modifier un type de chambre existant.
     *
     * @param RoomType $roomType
     * @return View|Factory
     */
    public function edit(RoomType $roomType): Factory|View
    {
        return view('pages.roomTypes.edit', compact('roomType'));
    }

    /**
     * Met à jour un type de chambre existant dans la base de données.
     *
     * @param Request $request
     * @param RoomType $roomType
     * @return RedirectResponse
     */
    public function update(Request $request, RoomType $roomType): RedirectResponse
    {
        // Valider les données de la requête
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'Description' => 'nullable|string|max:1000',
            'Maximumcapacity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        // Mettre à jour le type de chambre
        $roomType->update($validated);

        return redirect()->route('hotelRoomTypes.show', $roomType->id)
            ->with('message', 'Type de chambre mis à jour avec succès.');
    }

    /**
     * Supprime un type de chambre de la base de données.
     *
     * @param RoomType $roomType
     * @return RedirectResponse
     */
    public function destroy(RoomType $roomType): RedirectResponse
    {
        $roomType->delete();

        return redirect()->route('hotelRoomTypes.index')
            ->with('message', 'Type de chambre supprimé avec succès.');
    }
}
