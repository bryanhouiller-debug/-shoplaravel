<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

Route::get('/hello', function () {
    return 'Hello Laravel!';
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');;
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');