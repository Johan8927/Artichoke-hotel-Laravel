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
        if (!$hotel) {
            return response()->json([
                'message' => 'non trouvé'
            ], 404); // 404 Not Found
        }
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

