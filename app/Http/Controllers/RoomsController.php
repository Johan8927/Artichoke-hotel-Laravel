<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\View\View;
use LaraCrud\Crud\Controller;


/**
 * Description of RoomsController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class RoomsController extends Controller
{
       /**
     * Display a listing of Room
     *
     * @return View|Factory
     */
    public function index(Request $request): Factory|View
    {
          $builder = Room::query();
        return view('pages.rooms.index', [
		'rooms' => $builder->paginate(10),
]);
    }

   /**
     * Display the specified Room.
     *
     * @return View|Factory
     */
    public function show(Room $room): Factory|View
    {

        return view('pages.rooms.show', [
		'room' => $room,
]);
    }

   /**
     * Show the form for creating a new Room.
     *
     * @return View|Factory
     */
    public function create(): Factory|View
    {

        return view('pages.rooms.create', [
		'room' => new Room,
]);
    }

    /**
     * Store a newly created Room in storage.
     *
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
          $room = new Room;
		$room->fill($request->all())->save();

         return redirect()->route('rooms.show',$room->id)->with('message','Room successfully store');
    }

   /**
     * Show the form for editing the specified Room.
     *
     * @return View|Factory
     */
    public function edit(Room $room): Factory|View
    {

        return view('pages.rooms.edit', [
		'room' => $room,
]);
    }

    /**
     * Update the specified Room in storage.
     *
     * @return RedirectResponse
     */
    public function update(Request $request, Room $room): RedirectResponse
    {
          $room->fill($request->all())->save();

         return redirect()->route('rooms.show',$room->id)->with('message','Room successfully update');
    }

    /**
     * Remove the specified Room from storage.
     *
     * @return RedirectResponse
     */
    public function destroy(Room $room): RedirectResponse
    {
          $room->delete();
         return redirect()->route('rooms.index',$room->id)->with('message','Room successfully destroy');
    }

}
