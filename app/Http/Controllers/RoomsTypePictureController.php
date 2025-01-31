<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsTypePictureController extends Controller
{

    public function index()
    {
        return view('pages.room_type_pictures.index');
    }

    public function create()
    {
        return view('pages.room_type_pictures.create');
    }

    public function store(Request $request)
    {



    }

    public function show($id)
    {
        return view('pages.room_type_pictures.show');
    }

    public function edit($id)
    {
        return view('pages.room_type_pictures.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
