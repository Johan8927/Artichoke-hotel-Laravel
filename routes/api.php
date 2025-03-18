<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Auth Routes
Auth::routes(); // Cela génère les routes d'authentification nécessaires (login, register, logout)


// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Amenities routes
Route::post("/amenities/save", [App\Http\Controllers\AmenitiesController::class, 'saveAmenities']);
Route::get("/amenities", [App\Http\Controllers\AmenitiesController::class, 'getAllAmenities']);
Route::put("/amenities/{id}", [App\Http\Controllers\AmenitiesController::class, 'updateAmenities']);
Route::delete("/amenities/{id}", [App\Http\Controllers\AmenitiesController::class, 'deleteAmenities']);

// Rooms routes
Route::post("/rooms", [App\Http\Controllers\RoomsController::class, 'saveRooms']);
Route::get("/rooms", [App\Http\Controllers\RoomsController::class, 'getAllRooms']);
Route::put("/rooms/{id}", [App\Http\Controllers\RoomsController::class, 'updateRooms']);
Route::delete("/rooms/{id}", [App\Http\Controllers\RoomsController::class, 'deleteRooms']);

// RoomTypePicture routes
Route::post("/roomTypePicture", [App\Http\Controllers\RoomsTypePictureController::class, 'saveRoomTypePicture']);
Route::get("/roomTypePicture", [App\Http\Controllers\RoomsTypePictureController::class, 'getAllRoomTypePicture']);
Route::put("/roomTypePicture/{id}", [App\Http\Controllers\RoomsTypePictureController::class, 'updateRoomTypePicture']);
Route::delete("/roomTypePicture/{id}", [App\Http\Controllers\RoomsTypePictureController::class, 'deleteRoomTypePicture']);

// Pictures routes
Route::post("/pictures", [App\Http\Controllers\PicturesController::class, 'savePictures']);
Route::get("/pictures", [App\Http\Controllers\PicturesController::class, 'getAllPictures']);
Route::put("/pictures/{id}", [App\Http\Controllers\PicturesController::class, 'updatePictures']);
Route::delete("/pictures/{id}", [App\Http\Controllers\PicturesController::class, 'deletePictures']);

// RoomType routes
Route::post("/roomType", [App\Http\Controllers\RoomsTypeController::class, 'saveRoomType']);
Route::get("/roomType", [App\Http\Controllers\RoomsTypeController::class, 'getAllRoomType']);
Route::put("/roomType/{id}", [App\Http\Controllers\RoomsTypeController::class, 'updateRoomType']);
Route::delete("/roomType/{id}", [App\Http\Controllers\RoomsTypeController::class, 'deleteRoomType']);

// Heroes routes
Route::post("/heroes", [App\Http\Controllers\HeroesController::class, 'saveHeroes']);
Route::get("/heroes", [App\Http\Controllers\HeroesController::class, 'getAllHeroes']);
Route::put("/heroes/{id}", [App\Http\Controllers\HeroesController::class, 'updateHeroes']);
Route::delete("/heroes/{id}", [App\Http\Controllers\HeroesController::class, 'deleteHeroes']);

// Hotels routes
Route::post("/hotels", [App\Http\Controllers\HotelController::class, 'saveHotels']);
Route::get("/hotels", [App\Http\Controllers\HotelController::class, 'getAllHotels']);
Route::put("/hotels/{id}", [App\Http\Controllers\HotelController::class, 'updateHotels']);
Route::delete("/hotels/{id}", [App\Http\Controllers\HotelController::class, 'deleteHotels']);

// News routes
Route::post("/news", [App\Http\Controllers\NewsController::class, 'saveNews']);
Route::get("/news", [App\Http\Controllers\NewsController::class, 'getAllNews']);
Route::put("/news/{id}", [App\Http\Controllers\NewsController::class, 'updateNews']);
Route::delete("/news/{id}", [App\Http\Controllers\NewsController::class, 'deleteNews']);



// Vue.js routes

Route::get('/{any}', function () {
    return response()->json();
})->where('any', '.*'); // Redirige toutes les requêtes vers Vue
