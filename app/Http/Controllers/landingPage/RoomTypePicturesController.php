<?php

namespace App\Http\Controllers\landingPage;

use App\Models\RoomTypePicture;
use Illuminate\Http\Request;

class RoomTypePicturesController extends Controller
{

    // Create
    private static function query()
    {
        return RoomTypePicture::query();
    }

    public function saveRoomTypePicture(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'id_rooms_type' => 'required',
            'id_picture' => 'required',
        ]);
        $roomTypePicture = new RoomTypePicture();
        $roomTypePicture->extracted($request);
        return response()->json($roomTypePicture);
    }

    // Read
    public function getAllRoomTypePicture(): \Illuminate\Http\JsonResponse
    {
        return response()->json(RoomTypePicture::all());
    }

    public static function find($id)
    {
        return self::query()->find($id);
    }

    // Update

    public function updateRoomTypePicture(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $roomTypePicture = RoomTypePicture::find($id);
        if (!$roomTypePicture) {
            return response()->json([
                'message' => 'non trouvé'
            ], 404); // 404 Not Found
        }
        $roomTypePicture->extracted($request);
        $roomTypePicture->save();
        return response()->json($roomTypePicture);
    }

    // Delete

    public function deleteRoomTypePicture($id): \Illuminate\Http\JsonResponse
    {
        $roomTypePicture = RoomTypePicture::find($id);
        $roomTypePicture->delete();
        return response()->json([
            'message' => 'supprimé avec succès'
        ], 200); // 200 OK
    }
}
