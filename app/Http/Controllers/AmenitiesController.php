<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Amenities;
use Illuminate\View\View;


/**
 * Description of AmenitiesController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class AmenitiesController extends Controller
{
       /**
     * Display a listing of Amenities
     *
     * @return \Illuminate\Http\JsonResponse
        */
    public function getAllAmenities(){
        $amenities = Amenities::all();
        return response()->json($amenities);
    }


   /**
     * Display the specified Amenities.
     *
     * @return View|Factory
     */
    public function show(Amenities $amenities)
    {

        return view('pages.amenities.show', [
		'amenities' => $amenities,
]);
    }

   /**
     * Show the form for creating a new Amenities.
     *
     * @return View|Factory
     */
    public function create()
    {

        return view('pages.amenities.create', [
		'amenities' => new Amenities,
]);
    }

    /**
     * Store a newly created Amenities in storage.
     *
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
          $amenities = new Amenities;
		$amenities->fill($request->all())->save();

         return redirect()->route('amenities.show',$amenities->id)->with('message','Amenities successfully store');
    }

   /**
     * Show the form for editing the specified Amenities.
     *
     * @return View|Factory
     */
    public function edit(Amenities $amenities)
    {

        return view('pages.amenities.edit', [
		'amenities' => $amenities,
]);
    }

    /**
     * Update the specified Amenities in storage.
     *
     * @return RedirectResponse
     */
    public function update(Request $request,Amenities $amenities)
    {
          $amenities->fill($request->all())->save();

         return redirect()->route('amenities.show',$amenities->id)->with('message','Amenities successfully update');
    }

    /**
     * Remove the specified Amenities from storage.
     *
     * @return RedirectResponse
     */
    public function destroy(Amenities $amenities)
    {
          $amenities->delete();
         return redirect()->route('amenities.index',$amenities->id)->with('message','Amenities successfully destroy');
    }

}
