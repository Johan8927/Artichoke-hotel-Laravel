<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;

class HotelController extends Controller
{

    // Create

    private static function query(): \Illuminate\Database\Eloquent\Builder
    {
        return Hotel::query();
    }

    public function saveHotel(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'ZIP_code' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|string',
        ]);

        $hotel = new Hotel();
        $hotel->extracted($request, $hotel);

        return response()->json([
            'message' => 'créé avec succès',
            'data' => $hotel
        ], 201); // 201 Created
    }

// Read

    public function getAllHotels(): \Illuminate\Http\JsonResponse
    {
        $hotels = Hotel::all();
        return response()->json($hotels);
    }
    // Method for find id for hotel
    public static function find($id)
    {
        return self::query()->find($id);
    }


// Update

    public function updateHotel(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $hotel = Hotel::find($id);
        if (!$hotel) {
            return response()->json([
                'message' => 'non trouvé'
            ], 404); // 404 Not Found
        }
        $hotel->extracted($request, $hotel);

        return response()->json([
            'message' => 'modifié avec succès',
            'data' => $hotel
        ], 200); // 200 OK
    }

// Delete

    public function deleteHotel($id): \Illuminate\Http\JsonResponse
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return response()->json([
            'message' => 'supprimé avec succès'
        ], 200); // 200 OK
    }
}

