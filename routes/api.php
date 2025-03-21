<?php

use App\Http\Controllers\landingPage\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Amenity routes
Route::post("/amenities/save", [\App\Http\Controllers\landingPage\AmenitiesController::class, 'saveAmenities']);
Route::get("/amenities", [\App\Http\Controllers\landingPage\AmenitiesController::class, 'getAllAmenities']);
Route::put("/amenities/{id}", [\App\Http\Controllers\landingPage\AmenitiesController::class, 'updateAmenities']);
Route::delete("/amenities/{id}", [\App\Http\Controllers\landingPage\AmenitiesController::class, 'deleteAmenities']);

// Rooms routes
Route::post("/rooms", [\App\Http\Controllers\landingPage\RoomsController::class, 'saveRooms']);
Route::get("/rooms", [\App\Http\Controllers\landingPage\RoomsController::class, 'getAllRooms']);
Route::put("/rooms/{id}", [\App\Http\Controllers\landingPage\RoomsController::class, 'updateRooms']);
Route::delete("/rooms/{id}", [\App\Http\Controllers\landingPage\RoomsController::class, 'deleteRooms']);

// RoomTypePicture routes
Route::post("/roomTypePictures", [\App\Http\Controllers\landingPage\RoomTypePicturesController::class, 'saveRoomTypePicture']);
Route::get("/roomTypePictures", [\App\Http\Controllers\landingPage\RoomTypePicturesController::class, 'getAllRoomTypePicture']);
Route::put("/roomTypePictures/{id}", [\App\Http\Controllers\landingPage\RoomTypePicturesController::class, 'updateRoomTypePicture']);
Route::delete("/roomTypePictures/{id}", [\App\Http\Controllers\landingPage\RoomTypePicturesController::class, 'deleteRoomTypePicture']);

// Pictures routes
Route::post("/pictures", [\App\Http\Controllers\landingPage\PicturesController::class, 'savePictures']);
Route::get("/pictures", [\App\Http\Controllers\landingPage\PicturesController::class, 'getAllPictures']);
Route::put("/pictures/{id}", [\App\Http\Controllers\landingPage\PicturesController::class, 'updatePictures']);
Route::delete("/pictures/{id}", [\App\Http\Controllers\landingPage\PicturesController::class, 'deletePictures']);

// RoomType routes
Route::post("/roomTypes", [\App\Http\Controllers\landingPage\RoomTypesController::class, 'saveRoomType']);
Route::get("/roomTypes", [\App\Http\Controllers\landingPage\RoomTypesController::class, 'getAllRoomType']);
Route::put("/roomTypes/{id}", [\App\Http\Controllers\landingPage\RoomTypesController::class, 'updateRoomType']);
Route::delete("/roomTypes/{id}", [\App\Http\Controllers\landingPage\RoomTypesController::class, 'deleteRoomType']);

// Hero routes
Route::post("/hero", [\App\Http\Controllers\landingPage\HeroController::class, 'saveHero']);
Route::get("/hero", [\App\Http\Controllers\landingPage\HeroController::class, 'getHero']);
Route::put("/hero/{id}", [\App\Http\Controllers\landingPage\HeroController::class, 'updateHero']);
Route::delete("/hero/{id}", [\App\Http\Controllers\landingPage\HeroController::class, 'deleteHero']);

// Hotels routes
Route::post("/hotels", [\App\Http\Controllers\landingPage\HotelController::class, 'saveHotels']);
Route::get("/hotels", [\App\Http\Controllers\landingPage\HotelController::class, 'getAllHotels']);
Route::put("/hotels/{id}", [\App\Http\Controllers\landingPage\HotelController::class, 'updateHotels']);
Route::delete("/hotels/{id}", [\App\Http\Controllers\landingPage\HotelController::class, 'deleteHotels']);

// News routes
Route::post("/news", [\App\Http\Controllers\landingPage\NewsController::class, 'saveNews']);
Route::get("/news", [\App\Http\Controllers\landingPage\NewsController::class, 'getAllNews']);
Route::put("/news/{id}", [\App\Http\Controllers\landingPage\NewsController::class, 'updateNews']);
Route::delete("/news/{id}", [\App\Http\Controllers\landingPage\NewsController::class, 'deleteNews']);



// Vue.js routes

Route::get('/{any}', function () {
    return response()->json();
})->where('any', '.*'); // Redirige toutes les requêtes vers Vue
