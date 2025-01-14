<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Voici les endpoints CRUD générés par la route apiResource :

//GET /api/rooms: Liste des chambres.
//GET /api/rooms/{id}: Détails d'une chambre spécifique.
//POST /api/rooms: Créer une nouvelle chambre (données à fournir via JSON).
//PUT /api/rooms/{id}: Mettre à jour une chambre existante.
//DELETE /api/rooms/{id}: Supprimer une chambre.

Route::apiResource('rooms','RoomController');
Route::resource('rooms','RoomController');
Route::apiResource('hotels','HotelController');
Route::resource('hotels','HotelController');

