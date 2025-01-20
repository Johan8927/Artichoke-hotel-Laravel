<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HotelRoomTypes;
use Illuminate\View\View;


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
     * @return View|Factory
     */
    public function index(Request $request): Factory|View
    {
          $builder = HotelRoomTypes::query();
        return view('pages.hotelRoomTypes.index', [
		'hotelRoomTypes' => $builder->paginate(10),
]);
    }

   /**
     * Display the specified HotelRoomTypes.
     *
     * @return View|Factory
     */
    public function show(HotelRoomTypes $hotelRoomTypes): Factory|View
    {

        return view('pages.hotelRoomTypes.show', [
		'hotelRoomTypes' => $hotelRoomTypes,
]);
    }

   /**
     * Show the form for creating a new HotelRoomTypes.
     *
     * @return View|Factory
     */
    public function create(): Factory|View
    {

        return view('pages.hotelRoomTypes.create', [
		'hotelRoomTypes' => new HotelRoomTypes,
]);
    }

    /**
     * Store a newly created HotelRoomTypes in storage.
     *
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
          $hotelRoomTypes = new HotelRoomTypes;
		$hotelRoomTypes->fill($request->all())->save();

         return redirect()->route('hotelRoomTypes.show',$hotelRoomTypes->id)->with('message','HotelRoomTypes successfully store');
    }

   /**
     * Show the form for editing the specified HotelRoomTypes.
     *
     * @return View|Factory
     */
    public function edit(HotelRoomTypes $hotelRoomTypes): Factory|View
    {

        return view('pages.hotelRoomTypes.edit', [
		'hotelRoomTypes' => $hotelRoomTypes,
]);
    }

    /**
     * Update the specified HotelRoomTypes in storage.
     *
     * @return RedirectResponse
     */
    public function update(Request $request,HotelRoomTypes $hotelRoomTypes): RedirectResponse
    {
          $hotelRoomTypes->fill($request->all())->save();

         return redirect()->route('hotelRoomTypes.show',$hotelRoomTypes->id)->with('message','HotelRoomTypes successfully update');
    }

    /**
     * Remove the specified HotelRoomTypes from storage.
     *
     * @return RedirectResponse
     */
    public function destroy(HotelRoomTypes $hotelRoomTypes): RedirectResponse
    {
          $hotelRoomTypes->delete();
         return redirect()->route('hotelRoomTypes.index',$hotelRoomTypes->id)->with('message','HotelRoomTypes successfully destroy');
    }

}
