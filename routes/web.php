<?php

use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

// Auth
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

// Homepages routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Hero routes
Route::get('/hero/{hero}', [HeroController::class, 'show'])->name('hero.show');
Route::get('/hero/create', [HeroController::class, 'create'])->name('hero.create');
Route::post('/hero', [HeroController::class, 'store'])->name('hero.store');
Route::get('/hero/{hero}/edit', [HeroController::class, 'edit'])->name('hero.edit');
Route::patch('/hero/{hero}', [HeroController::class, 'update'])->name('hero.update');
Route::delete('/hero/{hero}', [HeroController::class, 'destroy'])->name('hero.destroy');
Route::get('/hero/{hero}/delete', [HeroController::class, 'delete'])->name('hero.delete');
Route::get('/hero/{hero}/restore', [HeroController::class, 'restore'])->name('hero.restore');

// Amenities routes
Route::get('/amenity/{amenity}', [AmenitiesController::class, 'show'])->name('amenity.show');
Route::get('/amenity/create', [AmenitiesController::class, 'create'])->name('amenity.create');
Route::post('/amenity', [AmenitiesController::class, 'store'])->name('amenity.store');
Route::get('/amenity/{amenity}/edit', [AmenitiesController::class, 'edit'])->name('amenity.edit');
Route::patch('/amenity/{amenity}', [AmenitiesController::class, 'update'])->name('amenity.update');
Route::delete('/amenity/{amenity}', [AmenitiesController::class, 'destroy'])->name('amenity.destroy');
Route::get('/amenity/{amenity}/delete', [AmenitiesController::class, 'delete'])->name('amenity.delete');
Route::get('/amenity/{amenity}/restore', [AmenitiesController::class, 'restore'])->name('amenity.restore');

// Room routes
Route::get('/room/{room}', [RoomController::class, 'show'])->name('room.show');
Route::get('/room/create', [RoomController::class, 'create'])->name('room.create');
Route::post('/room', [RoomController::class, 'store'])->name('room.store');
Route::get('/room/{room}/edit', [RoomController::class, 'edit'])->name('room.edit');
Route::patch('/room/{room}', [RoomController::class, 'update'])->name('room.update');
Route::delete('/room/{room}', [RoomController::class, 'destroy'])->name('room.destroy');
Route::get('/room/{room}/delete', [RoomController::class, 'delete'])->name('room.delete');
Route::get('/room/{room}/restore', [RoomController::class, 'restore'])->name('room.restore');

// News routes
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::patch('/news/{news}', [NewsController::class, 'update'])->name('news.update');
Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
Route::get('/news/{news}/delete', [NewsController::class, 'delete'])->name('news.delete');
Route::get('/news/{news}/restore', [NewsController::class, 'restore'])->name('news.restore');




