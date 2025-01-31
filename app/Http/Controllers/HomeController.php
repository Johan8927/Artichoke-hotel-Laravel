<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use App\Models\Heroes;
use App\Models\Amenities;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Afficher la page d'accueil (Landing Page).
     *
     * @return Factory|View
     */
    public function index(): Factory|View
    {
        $heroes = Heroes::all();
        $amenities = Amenities::all();
        $news = News::all();

        return view('pages.home', compact('heroes', 'amenities', 'news'));
    }
}
