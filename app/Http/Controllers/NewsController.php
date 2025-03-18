<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\News;

class NewsController extends Controller
{

    // Create

    private static function query(): \Illuminate\Database\Eloquent\Builder
    {
        return News::query();
    }

    public function saveNews(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'section_name' => 'required|string',
            'section_type' => 'required|string',
            'section_content' => 'required|string',
        ]);
        $news = new News();
        $this->extracted($request, $news);

        return response()->json([
            'message' => 'créé avec succès',
            'data' => $news
        ], 201); // 201 Created
    }

// Read

    public function getAllNews(): \Illuminate\Http\JsonResponse
    {
        $news = News::all();
        return response()->json($news);
    }

    // Method for find id for news
    public static function find($id)
    {
        return self::query()->find($id);
    }

// Update

    public function updateNews(Request $request, $id): \Illuminate\Http\JsonResponse
    {
        $news = News::find($id);
        if (!$news) {
            return response()->json([
                'message' => 'non trouvé'
            ], 404); // 404 Not Found
        }
        $this->extracted($request, $news);


        return response()->json([
            'message' => 'modifié avec succès',
            'data' => $news
        ], 200); // 200 OK
    }

// Delete

    public function deleteNews($id): \Illuminate\Http\JsonResponse
    {
        $news = News::find($id);
        $news->delete();

        return response()->json([
            'message' => 'supprimé avec succès'
        ], 200); // 200 OK
    }

    private function extracted(Request $request, $news): void
    {
        $news->section_name = $request->section_name;
        $news->section_type = $request->section_type;
        $news->section_content = $request->section_content;
        $news->save();
    }
}
