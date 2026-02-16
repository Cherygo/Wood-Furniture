<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FurnitureController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
        ->name('auth.register');
    Route::post('/register', RegisterController::class)
        ->middleware('guest');

    Route::get('/login', function () {
        return Inertia::render('auth/Login', []);
    })->middleware('guest')
        ->name('auth.login');
    Route::post('/login', LoginController::class)
        ->middleware('guest');

    Route::post('/logout', LogoutController::class)
        ->middleware('auth')
        ->name('auth.logout');
});

// CATALOG
   Route::get('/catalog', [FurnitureController::class, 'index'])->name('catalog.index');

// PRODUCT PAGE
Route::get('/product/{id}', [FurnitureController::class, 'show'])->name('product.show');

require __DIR__.'/settings.php';
