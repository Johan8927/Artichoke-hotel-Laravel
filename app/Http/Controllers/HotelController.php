<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Hotel;
use Illuminate\View\View;
use LaraCrud\Crud\Controller;




class HotelController extends Controller
{
       /**
     * Display a listing of HotelSeeder
     *
     * @return View|Factory
     */
    public function index(Request $request): Factory|View
    {
          $builder = Hotel::query();
        return view('pages.hotels.index', [
		'hotels' => $builder->paginate(10),
]);
    }

   /**
     * Display the specified HotelSeeder.
     *
     * @return View|Factory
     */
    public function show(Hotel $hotel): Factory|View
    {

        return view('pages.hotels.show', [
		'hotel' => $hotel,
]);
    }

   /**
     * Show the form for creating a new HotelSeeder.
     *
     * @return View|Factory
     */
    public function create(): Factory|View
    {

        return view('pages.hotels.create', [
		'hotel' => new Hotel,
]);
    }

    /**
     * Store a newly created HotelSeeder in storage.
     *
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
          $hotel = new Hotel;
		$hotel->fill($request->all())->save();

         return redirect()->route('hotels.show',$hotel->id)->with('message','HotelSeeder successfully store');
    }

   /**
     * Show the form for editing the specified HotelSeeder.
     *
     * @return View|Factory
     */
    public function edit(Hotel $hotel): Factory|View
    {

        return view('pages.hotels.edit', [
		'hotel' => $hotel,
]);
    }

    /**
     * Update the specified HotelSeeder in storage.
     *
     * @return RedirectResponse
     */
    public function update(Request $request,Hotel $hotel): RedirectResponse
    {
          $hotel->fill($request->all())->save();

         return redirect()->route('hotels.show',$hotel->id)->with('message','HotelSeeder successfully update');
    }

    /**
     * Remove the specified HotelSeeder from storage.
     *
     * @return RedirectResponse
     */
    public function destroy(Hotel $hotel): RedirectResponse
    {
          $hotel->delete();
         return redirect()->route('hotels.index',$hotel->id)->with('message','HotelSeeder successfully destroy');
    }

}
