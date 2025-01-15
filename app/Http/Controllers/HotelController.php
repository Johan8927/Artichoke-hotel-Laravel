<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use LaraCrud\Crud\Controller;




class HotelController extends Controller
{
       /**
     * Display a listing of Hotel
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(Request $request)
    {
          $builder = Hotel::query();
        return view('pages.hotels.index', [
		'hotels' => $builder->paginate(10),
]);
    }

   /**
     * Display the specified Hotel.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(Hotel $hotel)
    {

        return view('pages.hotels.show', [
		'hotel' => $hotel,
]);
    }

   /**
     * Show the form for creating a new Hotel.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {

        return view('pages.hotels.create', [
		'hotel' => new Hotel,
]);
    }

    /**
     * Store a newly created Hotel in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
          $hotel = new Hotel;
		$hotel->fill($request->all())->save();

         return redirect()->route('hotels.show',$hotel->id)->with('message','Hotel successfully store');
    }

   /**
     * Show the form for editing the specified Hotel.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Hotel $hotel)
    {

        return view('pages.hotels.edit', [
		'hotel' => $hotel,
]);
    }

    /**
     * Update the specified Hotel in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,Hotel $hotel)
    {
          $hotel->fill($request->all())->save();

         return redirect()->route('hotels.show',$hotel->id)->with('message','Hotel successfully update');
    }

    /**
     * Remove the specified Hotel from storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Hotel $hotel)
    {
          $hotel->delete();
         return redirect()->route('hotels.index',$hotel->id)->with('message','Hotel successfully destroy');
    }

}
