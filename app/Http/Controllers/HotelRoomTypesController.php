<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HotelRoomTypes;


/**
 * Description of HotelRoomTypesController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class HotelRoomTypesController extends Controller
{
       /**
     * Display a listing of HotelRoomTypes
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(Request $request)
    {
          $builder = HotelRoomTypes::query();
        return view('pages.hotelRoomTypes.index', [
		'hotelRoomTypes' => $builder->paginate(10),
]);
    }

   /**
     * Display the specified HotelRoomTypes.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(HotelRoomTypes $hotelRoomTypes)
    {
          
        return view('pages.hotelRoomTypes.show', [
		'hotelRoomTypes' => $hotelRoomTypes,
]);
    }

   /**
     * Show the form for creating a new HotelRoomTypes.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
          
        return view('pages.hotelRoomTypes.create', [
		'hotelRoomTypes' => new HotelRoomTypes,
]);
    }

    /**
     * Store a newly created HotelRoomTypes in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
          $hotelRoomTypes = new HotelRoomTypes;
		$hotelRoomTypes->fill($request->all())->save();

         return redirect()->route('hotelRoomTypes.show',$hotelRoomTypes->id)->with('message','HotelRoomTypes successfully store');
    }

   /**
     * Show the form for editing the specified HotelRoomTypes.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(HotelRoomTypes $hotelRoomTypes)
    {
          
        return view('pages.hotelRoomTypes.edit', [
		'hotelRoomTypes' => $hotelRoomTypes,
]);
    }

    /**
     * Update the specified HotelRoomTypes in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,HotelRoomTypes $hotelRoomTypes)
    {
          $hotelRoomTypes->fill($request->all())->save();

         return redirect()->route('hotelRoomTypes.show',$hotelRoomTypes->id)->with('message','HotelRoomTypes successfully update');
    }

    /**
     * Remove the specified HotelRoomTypes from storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(HotelRoomTypes $hotelRoomTypes)
    {
          $hotelRoomTypes->delete();
         return redirect()->route('hotelRoomTypes.index',$hotelRoomTypes->id)->with('message','HotelRoomTypes successfully destroy');
    }

}
