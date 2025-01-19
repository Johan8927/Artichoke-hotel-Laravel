<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LandingPageNews;


/**
 * Description of LandingPageNewsController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class LandingPageNewsController extends Controller
{
       /**
     * Display a listing of LandingPageNews
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(Request $request)
    {
          $builder = LandingPageNews::query();
        return view('pages.landingPageNews.index', [
		'landingPageNews' => $builder->paginate(10),
]);
    }

   /**
     * Display the specified LandingPageNews.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(LandingPageNews $landingPageNews)
    {
          
        return view('pages.landingPageNews.show', [
		'landingPageNews' => $landingPageNews,
]);
    }

   /**
     * Show the form for creating a new LandingPageNews.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
          
        return view('pages.landingPageNews.create', [
		'landingPageNews' => new LandingPageNews,
]);
    }

    /**
     * Store a newly created LandingPageNews in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
          $landingPageNews = new LandingPageNews;
		$landingPageNews->fill($request->all())->save();

         return redirect()->route('landingPageNews.show',$landingPageNews->id)->with('message','LandingPageNews successfully store');
    }

   /**
     * Show the form for editing the specified LandingPageNews.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(LandingPageNews $landingPageNews)
    {
          
        return view('pages.landingPageNews.edit', [
		'landingPageNews' => $landingPageNews,
]);
    }

    /**
     * Update the specified LandingPageNews in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,LandingPageNews $landingPageNews)
    {
          $landingPageNews->fill($request->all())->save();

         return redirect()->route('landingPageNews.show',$landingPageNews->id)->with('message','LandingPageNews successfully update');
    }

    /**
     * Remove the specified LandingPageNews from storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(LandingPageNews $landingPageNews)
    {
          $landingPageNews->delete();
         return redirect()->route('landingPageNews.index',$landingPageNews->id)->with('message','LandingPageNews successfully destroy');
    }

}
