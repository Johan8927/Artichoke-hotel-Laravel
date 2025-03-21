<?php

namespace App\Http\Controllers\landingPage;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{

    // Create
    private static function query()
    {
        return Hero::query();
    }

    public function saveHero(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'section_name' => 'required|string',
            'section_content' => 'required|string',
            'id_picture' => 'required|integer',
        ]);
        $hero = new Hero();
        $hero->extracted($request, $hero);
        return response()->json([
            'message' => 'créé avec succès',
            'data' => $hero
        ], 201); // 201 Created
    }

    // Read

    public function getHero(): \Illuminate\Http\JsonResponse
    {
        $hero = Hero::all();
        return response()->json($hero);
    }
    // Method for find id by hero
    public static function find($id)
    {
        return self::query()->find($id);
    }

    // Update

    public function updateHero(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $hero = Hero::find($id);
        $hero->extracted($request, $hero);

        return response()->json([
            'message' => 'modifié avec succès',
            'data' => $hero
        ], 200); // 200 OK
    }

    // Delete

    public function deleteHero($id): \Illuminate\Http\JsonResponse
    {
        $hero = Hero::find($id);
        $hero->delete();

        return response()->json([
            'message' => 'supprimé avec succès'
        ], 200); // 200 OK
    }
}
