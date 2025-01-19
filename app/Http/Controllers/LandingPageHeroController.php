<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LandingPageHero;


/**
 * Description of LandingPageHeroController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class LandingPageHeroController extends Controller
{
       /**
     * Display a listing of LandingPageHero
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(Request $request)
    {
          $builder = LandingPageHero::query();
        return view('pages.landingPageHeroes.index', [
		'landingPageHeroes' => $builder->paginate(10),
]);
    }

   /**
     * Display the specified LandingPageHero.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(LandingPageHero $landingPageHero)
    {
          
        return view('pages.landingPageHeroes.show', [
		'landingPageHero' => $landingPageHero,
]);
    }

   /**
     * Show the form for creating a new LandingPageHero.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
          
        return view('pages.landingPageHeroes.create', [
		'landingPageHero' => new LandingPageHero,
]);
    }

    /**
     * Store a newly created LandingPageHero in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
          $landingPageHero = new LandingPageHero;
		$landingPageHero->fill($request->all())->save();

         return redirect()->route('landingPageHeroes.show',$landingPageHero->id)->with('message','LandingPageHero successfully store');
    }

   /**
     * Show the form for editing the specified LandingPageHero.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(LandingPageHero $landingPageHero)
    {
          
        return view('pages.landingPageHeroes.edit', [
		'landingPageHero' => $landingPageHero,
]);
    }

    /**
     * Update the specified LandingPageHero in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,LandingPageHero $landingPageHero)
    {
          $landingPageHero->fill($request->all())->save();

         return redirect()->route('landingPageHeroes.show',$landingPageHero->id)->with('message','LandingPageHero successfully update');
    }

    /**
     * Remove the specified LandingPageHero from storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(LandingPageHero $landingPageHero)
    {
          $landingPageHero->delete();
         return redirect()->route('landingPageHeroes.index',$landingPageHero->id)->with('message','LandingPageHero successfully destroy');
    }

}
