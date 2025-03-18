<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\RoomType;
use Illuminate\View\View;

class RoomsTypeController extends Controller
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
