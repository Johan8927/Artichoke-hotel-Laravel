<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LandingPageAmenities;


/**
 * Description of LandingPageAmenitiesController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class LandingPageAmenitiesController extends Controller
{
       /**
     * Display a listing of LandingPageAmenities
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(Request $request)
    {
          $builder = LandingPageAmenities::query();
        return view('pages.landingPageAmenities.index', [
		'landingPageAmenities' => $builder->paginate(10),
]);
    }

   /**
     * Display the specified LandingPageAmenities.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(LandingPageAmenities $landingPageAmenities)
    {
          
        return view('pages.landingPageAmenities.show', [
		'landingPageAmenities' => $landingPageAmenities,
]);
    }

   /**
     * Show the form for creating a new LandingPageAmenities.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
          
        return view('pages.landingPageAmenities.create', [
		'landingPageAmenities' => new LandingPageAmenities,
]);
    }

    /**
     * Store a newly created LandingPageAmenities in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
          $landingPageAmenities = new LandingPageAmenities;
		$landingPageAmenities->fill($request->all())->save();

         return redirect()->route('landingPageAmenities.show',$landingPageAmenities->id)->with('message','LandingPageAmenities successfully store');
    }

   /**
     * Show the form for editing the specified LandingPageAmenities.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(LandingPageAmenities $landingPageAmenities)
    {
          
        return view('pages.landingPageAmenities.edit', [
		'landingPageAmenities' => $landingPageAmenities,
]);
    }

    /**
     * Update the specified LandingPageAmenities in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,LandingPageAmenities $landingPageAmenities)
    {
          $landingPageAmenities->fill($request->all())->save();

         return redirect()->route('landingPageAmenities.show',$landingPageAmenities->id)->with('message','LandingPageAmenities successfully update');
    }

    /**
     * Remove the specified LandingPageAmenities from storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(LandingPageAmenities $landingPageAmenities)
    {
          $landingPageAmenities->delete();
         return redirect()->route('landingPageAmenities.index',$landingPageAmenities->id)->with('message','LandingPageAmenities successfully destroy');
    }

}
