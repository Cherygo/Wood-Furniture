<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return Inertia::render('index', [
        'furniture' =>Furniture::take(7)
    ]);
});

// AUTH
Route::get('/register', function () {
    return Inertia::render('WoodFurniture/Register', []);
})->middleware('guest')
    ->name('register');
Route::post('/register', RegisterController::class)
    ->middleware('guest');

Route::get('/login', function () {
 return Inertia::render('WoodFurniture/Login', []);
})->middleware('guest')
    ->name('login');
Route::post('/login', LoginController::class)
    ->middleware('guest');

Route::post('/logout', LogoutController::class)
    ->middleware('auth')
    ->name('logout');

require __DIR__.'/settings.php';
