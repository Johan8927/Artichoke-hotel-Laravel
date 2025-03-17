<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenities;

class AmenitiesController extends Controller
{
    // Création
    public function saveAmenities(Request $request): \Illuminate\Http\JsonResponse
    {
        $amenities = new Amenities();
        $amenities->name = $request->name;
        $amenities->description = $request->description;
        $amenities->save();

        return response()->json([
            'message' => 'Équipement créé avec succès',
            'data' => $amenities
        ], 201); // 201 Created
    }

    // Lecture
    public function getAllAmenities(): \Illuminate\Http\JsonResponse
    {
        $amenities = Amenities::all();
        return response()->json($amenities, 200); // 200 OK
    }

    // Mise à jour
    public function updateAmenities(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $amenities = Amenities::find($id);
        if (!$amenities) {
            return response()->json([
                'message' => 'non trouvé'
            ], 404); // 404 Not Found
        }

        $amenities->name = $request->name;
        $amenities->description = $request->description;
        $amenities->save();

        return response()->json([
            'message' => 'mis à jour avec succès',
            'data' => $amenities
        ], 200); // 200 OK
    }

    // Suppression
    public function destroyAmenities($id): \Illuminate\Http\JsonResponse
    {
        $amenities = Amenities::find($id);
        if (!$amenities) {
            return response()->json([
                'message' => 'non trouvé'
            ], 404); // 404 Not Found
        }

        $amenities->delete();

        return response()->json([
            'message' => 'supprimé avec succès'
        ], 200); // 200 OK
    }
}
