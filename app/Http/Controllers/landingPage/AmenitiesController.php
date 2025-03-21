<?php

namespace App\Http\Controllers\landingPage;

use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
    // Create
    private static function query(): \Illuminate\Database\Eloquent\Builder
    {
        return Amenity::query();
    }

    public function saveAmenity(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => 'required|string',
            'id_picture' => 'required|integer',
            'content' => 'nullable|string',
        ]);

        $amenity = new Amenity();
        $amenity->extracted($request, $amenity);

        return response()->json([
            'message' => 'Créé avec succès',
            'data' => $amenity
        ], 201); // 201 Created
    }

    // Read
    public function getAllAmenities(): \Illuminate\Http\JsonResponse
    {
        $amenities = Amenity::all();
        return response()->json($amenities, 200); // 200 OK
    }
    // Method to find id of amenity
    public static function find($id)
    {
        return self::query()->find($id);
    }


    // Update
    public function updateAmenity(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $amenity = Amenity::find($id);
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
        $amenity = Amenity::find($id);
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
