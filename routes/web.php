<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Auth Routes
Auth::routes(); // Cela génère les routes d'authentification nécessaires (login, register, logout)

Route::get('/', function () {
    return view('pages.landingPage');
});

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
// Heroes routes
Route::middleware('auth')->group(function () {
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
    Route::post('/hero', [App\Http\Controllers\HeroesController::class, 'store']);
    Route::patch('/hero/{hero}', [App\Http\Controllers\HeroesController::class, 'update']);
    Route::delete('/hero/{hero}', [App\Http\Controllers\HeroesController::class, 'destroy']);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/{any}', function () {
    return view('app'); // Assurez-vous que app.blade.php charge bien Vue
})->where('any', '.*'); // Redirige toutes les requêtes vers Vue
