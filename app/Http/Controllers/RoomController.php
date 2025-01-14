<?php

// app/Http/Controllers/RoomController.php
namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RoomController extends Controller
{
    // READ - List all rooms
    public function index()
    {
        $rooms = Room::with('type')->get(); // Eager load type relationship
        return response()->json($rooms);
    }

    // CREATE - Show form (if needed) or store a new room
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type_id' => 'required|exists:room_types,id',
            'number' => 'required|unique:rooms,number|max:255',
            'capacity' => 'required|integer|min:1',
            'is_available' => 'boolean',
            'description' => 'nullable|string',
        ]);

        $room = Room::create($validated);
        return response()->json(['message' => 'Room created successfully', 'room' => $room]);
    }

    // READ - Show a specific room
    public function show(Room $room)
    {
        return response()->json($room->load('type'));
    }

    // UPDATE - Update a specific room
    public function update(Request $request, Room $room)
    {
        $validated = $request->validate([
            'type_id' => 'required|exists:room_types,id',
            'number' => 'required|max:255|unique:rooms,number,' . $room->id,
            'capacity' => 'required|integer|min:1',
            'is_available' => 'boolean',
            'description' => 'nullable|string',
        ]);

        $room->update($validated);
        return response()->json(['message' => 'Room updated successfully', 'room' => $room]);
    }

    // DELETE - Delete a specific room
    public function destroy(Room $room)
    {
        $room->delete();
        return response()->json(['message' => 'Room deleted successfully']);
    }
}

