<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use LaraCrud\Crud\Controller;


/**
 * Description of RoomController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class RoomController extends Controller
{
       /**
     * Display a listing of Room
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(Request $request)
    {
          $builder = Room::query();
        return view('pages.rooms.index', [
		'rooms' => $builder->paginate(10),
]);
    }

   /**
     * Display the specified Room.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show(Room $room)
    {

        return view('pages.rooms.show', [
		'room' => $room,
]);
    }

   /**
     * Show the form for creating a new Room.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {

        return view('pages.rooms.create', [
		'room' => new Room,
]);
    }

    /**
     * Store a newly created Room in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
          $room = new Room;
		$room->fill($request->all())->save();

         return redirect()->route('rooms.show',$room->id)->with('message','Room successfully store');
    }

   /**
     * Show the form for editing the specified Room.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Room $room)
    {

        return view('pages.rooms.edit', [
		'room' => $room,
]);
    }

    /**
     * Update the specified Room in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,Room $room)
    {
          $room->fill($request->all())->save();

         return redirect()->route('rooms.show',$room->id)->with('message','Room successfully update');
    }

    /**
     * Remove the specified Room from storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Room $room)
    {
          $room->delete();
         return redirect()->route('rooms.index',$room->id)->with('message','Room successfully destroy');
    }

}
