<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Home page route
Route::get('/', function () {
    return view('pages.home');
});
// Auth routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Admin routes
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Heroes routes
Route::get('/hero', function () {
    return view('pages.hero.index');
});
Route::get('/hero/{hero}', function (App\Models\Heroes $hero) {
    return view('pages.hero.show', compact('hero'));
});
Route::get('/hero/create', function () {
    return view('pages.hero.create');
});
Route::get('/hero/{hero}/edit', function (App\Models\Heroes $hero) {
    return view('pages.hero.edit', compact('hero'));
});
Route::post('/hero', [App\Http\Controllers\HeroesController::class,'store']);
Route::patch('/hero/{hero}', [App\Http\Controllers\HeroesController::class,'update']);
Route::delete('/hero/{hero}', [App\Http\Controllers\HeroesController::class,'destroy']);

// RoomsType routes
Route::get('/roomType', function () {
    return view('pages.roomType.index');
});
Route::get('/roomType/{roomType}', function (App\Models\RoomsType $roomType) {
    return view('pages.roomType.show', compact('roomType'));
});
Route::get('/roomType/create', function () {
    return view('pages.roomType.create');
});
Route::get('/roomType/{roomType}/edit', function (App\Models\RoomsType $roomType) {
    return view('pages.roomType.edit', compact('roomType'));
});
Route::post('/roomType', [App\Http\Controllers\RoomsTypeController::class,'store']);
Route::patch('/roomType/{roomType}', [App\Http\Controllers\RoomsTypeController::class,'update']);
Route::delete('/roomType/{roomType}', [App\Http\Controllers\RoomsTypeController::class,'destroy']);

// Rooms routes
Route::get('/room', function () {
    return view('pages.room.index');
});
Route::get('/room/{room}', function (App\Models\Rooms $room) {
    return view('pages.room.show', compact('room'));
});
Route::get('/room/create', function () {
    return view('pages.room.create');
});
Route::get('/room/{room}/edit', function (App\Models\Rooms $room) {
    return view('pages.room.edit', compact('room'));
});
Route::post('/room', [App\Http\Controllers\RoomsController::class,'store']);
Route::patch('/room/{room}', [App\Http\Controllers\RoomsController::class,'update']);
Route::delete('/room/{room}', [App\Http\Controllers\RoomsController::class,'destroy']);

// RoomTypePicture routes
Route::get('/roomTypePicture', function () {
    return view('pages.roomTypePicture.index');
});
Route::get('/roomTypePicture/{roomTypePicture}', function (App\Models\RoomsTypePicture $roomTypePicture) {
    return view('pages.roomTypePicture.show', compact('roomTypePicture'));
});
Route::get('/roomTypePicture/create', function () {
    return view('pages.roomTypePicture.create');
});
Route::get('/roomTypePicture/{roomTypePicture}/edit', function (App\Models\RoomsTypePicture $roomTypePicture) {
    return view('pages.roomTypePicture.edit', compact('roomTypePicture'));
});
Route::post('/roomTypePicture', [App\Http\Controllers\RoomsTypePictureController::class,'store']);
Route::patch('/roomTypePicture/{roomTypePicture}', [App\Http\Controllers\RoomsTypePictureController::class,'update']);
Route::delete('/roomTypePicture/{roomTypePicture}', [App\Http\Controllers\RoomsTypePictureController::class,'destroy']);

// News routes
Route::get('/news', function () {
    return view('pages.news.index');
});
Route::get('/news/{news}', function (App\Models\News $news) {
    return view('pages.news.show', compact('news'));
});
Route::get('/news/create', function () {
    return view('pages.news.create');
});
Route::get('/news/{news}/edit', function (App\Models\News $news) {
    return view('pages.news.edit', compact('news'));
});
Route::post('/news', [App\Http\Controllers\NewsController::class,'store']);
Route::patch('/news/{news}', [App\Http\Controllers\NewsController::class,'update']);
Route::delete('/news/{news}', [App\Http\Controllers\NewsController::class,'destroy']);

// Amenities routes
Route::get('/amenity', function () {
    return view('pages.amenities.index');
});
Route::get('/amenity/{amenity}', function (App\Models\Amenities $amenity) {
    return view('pages.amenities.show', compact('amenity'));
});
Route::get('/amenity/create', function () {
    return view('pages.amenities.create');
});
Route::get('/amenity/{amenity}/edit', function (App\Models\Amenities $amenity) {
    return view('pages.amenities.edit', compact('amenity'));
});
Route::post('/amenity', [App\Http\Controllers\AmenitiesController::class,'store']);
Route::patch('/amenity/{amenity}', [App\Http\Controllers\AmenitiesController::class,'update']);
Route::delete('/amenity/{amenity}', [App\Http\Controllers\AmenitiesController::class,'destroy']);

// Hotel routes
Route::get('/hotel', function () {
    return view('pages.hotel.index');
});
Route::get('/hotel/{hotel}', function (App\Models\Hotel $hotel) {
    return view('pages.hotel.show', compact('hotel'));
});
Route::get('/hotel/create', function () {
    return view('pages.hotel.create');
});
Route::get('/hotel/{hotel}/edit', function (App\Models\Hotel $hotel) {
    return view('pages.hotel.edit', compact('hotel'));
});
Route::post('/hotel', [App\Http\Controllers\HotelController::class,'store']);
Route::patch('/hotel/{hotel}', [App\Http\Controllers\HotelController::class,'update']);
Route::delete('/hotel/{hotel}', [App\Http\Controllers\HotelController::class,'destroy']);


