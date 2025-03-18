<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenities;

class AmenitiesController extends Controller
{
    // Create
    public function saveAmenity(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => 'required|string',
            'id_picture' => 'required|integer',
            'content' => 'nullable|string',
        ]);

        $amenity = new Amenities();
        $amenity->extracted($request, $amenity);

        return response()->json([
            'message' => 'Créé avec succès',
            'data' => $amenity
        ], 201); // 201 Created
    }

    // Read
    public function getAllAmenities(): \Illuminate\Http\JsonResponse
    {
        $amenities = Amenities::all();
        return response()->json($amenities, 200); // 200 OK
    }

    // Update
    public function updateAmenity(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $amenity = Amenities::find($id);
        if (!$amenity) {
            return response()->json([
                'message' => 'Non trouvé'
            ], 404); // 404 Not Found
        }

        $amenity->extracted($request, $amenity);

        return response()->json([
            'message' => 'Modifié avec succès',
            'data' => $amenity
        ], 200); // 200 OK
    }

    // Delete
    public function destroyAmenity($id): \Illuminate\Http\JsonResponse
    {
        $amenity = Amenities::find($id);
        if (!$amenity) {
            return response()->json([
                'message' => 'Non trouvé'
            ], 404); // 404 Not Found
        }

        $amenity->delete();

        return response()->json([
            'message' => 'Supprimé avec succès'
        ], 200); // 200 OK
    }
}
