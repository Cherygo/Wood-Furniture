<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FurnitureController as FurnitureController;
use App\Models\Furniture;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canRegister' => Features::enabled(Features::registration()),
//     ]);
// })->name('home');
//
Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/', function () {
    return Inertia::render('index', array(
        'furniture' => FurnitureController::getXLatestItems(7),
    ));
})->name('index');

// AUTH
Route::group(['prefix' => 'auth'], function () {
    Route::get('/register', function () {
        return Inertia::render('auth/Register', []);
    })->middleware('guest')
        ->name('register');
    Route::post('/register', RegisterController::class)
        ->middleware('guest');

    Route::get('/login', function () {
        return Inertia::render('auth/Login', []);
    })->middleware('guest')
        ->name('login');
    Route::post('/login', LoginController::class)
        ->middleware('guest');

    Route::post('/logout', LogoutController::class)
        ->middleware('auth')
        ->name('logout');
});

// CATALOG
Route::group(['prefix' => 'catalog'], function () {
   Route::get('/', [FurnitureController::class, 'index'])->name('catalog.index');
});

require __DIR__.'/settings.php';
