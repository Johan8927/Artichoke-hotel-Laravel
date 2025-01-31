<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Rooms;
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
     * Display a listing of Rooms
     *
     * @return View|Factory
     */
    public function index(Request $request): Factory|View
    {
          $builder = Rooms::query();
        return view('pages.rooms.index', [
		'rooms' => $builder->paginate(10),
]);
    }

   /**
     * Display the specified Rooms.
     *
     * @return View|Factory
     */
    public function show(Rooms $room): Factory|View
    {

        return view('pages.rooms.show', [
		'room' => $room,
]);
    }

   /**
     * Show the form for creating a new Rooms.
     *
     * @return View|Factory
     */
    public function create(): Factory|View
    {

        return view('pages.rooms.create', [
		'room' => new Rooms,
]);
    }

    /**
     * Store a newly created Rooms in storage.
     *
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
          $room = new Rooms;
		$room->fill($request->all())->save();

         return redirect()->route('rooms.show',$room->id)->with('message','Rooms successfully store');
    }

   /**
     * Show the form for editing the specified Rooms.
     *
     * @return View|Factory
     */
    public function edit(Rooms $room): Factory|View
    {

        return view('pages.rooms.edit', [
		'room' => $room,
]);
    }

    /**
     * Update the specified Rooms in storage.
     *
     * @return RedirectResponse
     */
    public function update(Request $request, Rooms $room): RedirectResponse
    {
          $room->fill($request->all())->save();

         return redirect()->route('rooms.show',$room->id)->with('message','Rooms successfully update');
    }

    /**
     * Remove the specified Rooms from storage.
     *
     * @return RedirectResponse
     */
    public function destroy(Rooms $room): RedirectResponse
    {
          $room->delete();
         return redirect()->route('rooms.index',$room->id)->with('message','Rooms successfully destroy');
    }

}
