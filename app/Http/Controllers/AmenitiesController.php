<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amenities;

class AmenitiesController extends Controller
{
    // Create
    public function saveAmenity(Request $request): \Illuminate\Http\JsonResponse
    {
        $amenity = new Amenities();
        $amenity->name = $request->name;
        $amenity->description = $request->description;
        $amenity->save();

        return response()->json([
            'message' => 'créé avec succès',
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
                'message' => 'non trouvé'
            ], 404); // 404 Not Found
        }

        $amenity->name = $request->name;
        $amenity->description = $request->description;
        $amenity->id_picture = $request->id_picture;
        $amenity->save();

        return response()->json([
            'message' => 'mis à jour avec succès',
            'data' => $amenity
        ], 200); // 200 OK
    }

    // Delete
    public function destroyAmenity($id): \Illuminate\Http\JsonResponse
    {
        $amenity = Amenities::find($id);
        if (!$amenity) {
            return response()->json([
                'message' => 'non trouvé'
            ], 404); // 404 Not Found
        }

        $amenity->delete();

        return response()->json([
            'message' => 'supprimé avec succès'
        ], 200); // 200 OK
    }
}
