<?php

namespace App\Http\Controllers\landingPage;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypesController extends Controller
{
    // Create

    public function saveRoomType(Request $request): \Illuminate\Http\JsonResponse
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'maximumcapacity' => 'required',
            'price' => 'required',
        ]);
        $roomType = new RoomType();
        $roomType->extracted($request, $roomType);

        return response()->json([
            'message' => 'créé avec succès',
            'data' => $roomType
        ], 201); // 201 Created
    }

    // Read

    public function getAllRoomType(): \Illuminate\Http\JsonResponse
    {
        $roomType = RoomType::all();
        return response()->json($roomType);
    }
    public static function find($id)
    {
        return RoomType::find($id);
    }


    // Update

    public function updateRoomType(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $roomType = RoomType::find($id);
        if ($roomType === null) {
            return response()->json([
                'message' => 'introuvable',
            ], 404); // 404 Not Found
        }
        $roomType->extracted($request, $roomType);
        return response()->json([
            'message' => 'modifié avec succès',
            'data' => $roomType
        ], 200); // 200 OK
    }


}
