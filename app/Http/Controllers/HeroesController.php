<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Heroes;
use App\Models\News;
use App\Models\Room;
use App\Models\Pictures;

class HeroesController extends Controller
{

    // Create
    private static function query()
    {
        return Heroes::query();
    }

    public function saveHero(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'section_name' => 'required|string',
            'section_content' => 'required|string',
            'id_picture' => 'required|integer',
        ]);
        $hero = new Heroes();
        $hero->extracted($request, $hero);
        return response()->json([
            'message' => 'créé avec succès',
            'data' => $hero
        ], 201); // 201 Created
    }

    // Read

    public function getAllHeroes(): \Illuminate\Http\JsonResponse
    {
        $heroes = Heroes::all();
        return response()->json($heroes);
    }
    // Method for find id by hero
    public static function find($id)
    {
        return self::query()->find($id);
    }

    // Update

    public function updateHero(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $hero = Heroes::find($id);
        $hero->extracted($request, $hero);

        return response()->json([
            'message' => 'modifié avec succès',
            'data' => $hero
        ], 200); // 200 OK
    }

    // Delete

    public function deleteHero($id): \Illuminate\Http\JsonResponse
    {
        $hero = Heroes::find($id);
        $hero->delete();

        return response()->json([
            'message' => 'supprimé avec succès'
        ], 200); // 200 OK
    }
}
