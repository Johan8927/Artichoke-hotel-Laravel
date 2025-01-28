<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/landingPageHero', [HeroController::class, 'index']);
// Route principale pour afficher la landing page
Route::get('/', [HeroController::class, 'index'])->name('landingpageheroes.index');

// Routes CRUD pour Hero
Route::resource('landingpageheroes', HeroController::class);

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
Route::resource('landingpageheroes', HeroController::class);
Route::resource('landingpagenews', 'NewsController');
Route::resource('landingpageamenities', 'AmenitiesController');
Route::resource('hotelroomtypes', 'RoomTypesController');
