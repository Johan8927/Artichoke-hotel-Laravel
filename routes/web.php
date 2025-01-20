<?php

use App\Http\Controllers\LandingPageHeroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/landingPageHero', [LandingPageHeroController::class, 'index']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Auth routes
require __DIR__ . '/auth.php';

// Ressources des contrôleurs
Route::resource('landingpageheroes', LandingPageHeroController::class);
Route::resource('landingpagenews', 'LandingPageNewsController');
Route::resource('landingpageamenities', 'LandingPageAmenitiesController');
Route::resource('hotelroomtypes', 'HotelRoomTypesController');
