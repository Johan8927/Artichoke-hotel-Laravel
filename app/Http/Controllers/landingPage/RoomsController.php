<?php

namespace App\Http\Controllers\landingPage;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;



/**
 * Description of RoomsController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */
class RoomsController extends Controller
{

    // Create

    private static function query(): \Illuminate\Database\Eloquent\Builder
    {
        return Room::query();
    }

    public function saveRoom(Request $request): \Illuminate\Http\JsonResponse
    {

        $request->validate([
            'id_hotel' => 'required',
            'id_rooms_type' => 'required',
            'rooms_number' => 'required',
        ]);
        $room = new Room();
        $this->extracted($request, $room);

        return response()->json([
            'message' => 'créé avec succès',
            'data' => $room
        ], 201); // 201 Created
    }

// Read

    public function getAllRooms(): \Illuminate\Http\JsonResponse
    {
        $room = Room::all();
        return response()->json($room);
    }
    // Method for find room by id
    public static function find($id)
    {
        return self::query()->find($id);
    }


// Update

    public function updateRoom(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $room = Room::find($id);
        if (!$room) {
            return response()->json([
                'message' => 'non trouvé'
            ], 404); // 404 Not Found
        }
        $this->extracted($request, $room);

        // Method for extracting data from request and saving to model


        return response()->json([
            'message' => 'modifié avec succès',
            'data' => $room
        ], 200); // 200 OK
    }

    // Delete

    public function deleteRoom($id): \Illuminate\Http\JsonResponse
    {
        $room = Room::find($id);
        if (!$room) {
            return response()->json([
                'message' => 'non trouvé'
            ], 404); // 404 Not Found
        }
        $room->delete();
        return response()->json([
            'message' => 'supprimé avec succès'
        ], 200); // 200 OK
    }

    // Method for extracting data from request and saving to model
    private function extracted(Request $request, $room): void
    {
        $room->id_hotel = $request->id_hotel;
        $room->id_rooms_type = $request->id_rooms_type;
        $room->rooms_number = $request->rooms_number;
    }
}

