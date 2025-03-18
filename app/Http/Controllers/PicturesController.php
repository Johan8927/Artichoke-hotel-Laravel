<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use Illuminate\Http\Request;

class PicturesController extends Controller
{

    // Create

    public function savePictures(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'name' => 'required',
            'path' => 'required',
        ]);
        $pictures = new Pictures();
        $this->extracted($request, $pictures);

        return response()->json([
            'message' => 'créé avec succès',
            'data' => $pictures
        ], 201); // 201 Created
    }

// Read

    public function getAllPictures(): \Illuminate\Http\JsonResponse
    {
        $pictures = Pictures::all();
        return response()->json($pictures);
    }

    // Update

    public function updatePictures(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $pictures = Pictures::find($id);
        if (!$pictures) {
            return response()->json([
                'message' => 'non trouvé'
            ], 404); // 404 Not Found
        }
        $this->extracted($request, $pictures);


        return response()->json([
            'message' => 'modifié avec succès',
            'data' => $pictures
        ], 200); // 200 OK
    }

    // Delete

    public function deletePictures($id): \Illuminate\Http\JsonResponse
    {
        $pictures = Pictures::find($id);
        $pictures->delete();

        return response()->json([
            'message' => 'supprimé avec succès'
        ], 200); // 200 OK
    }

    // Method to extract this item
    private function extracted(Request $request, \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection $pictures): void

    {
        $pictures->name = $request->name;
        $pictures->path = $request->path;
        $pictures->save();
    }
}






