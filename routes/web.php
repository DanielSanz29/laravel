<?php
use App\Http\Controllers\PizzaController;

use App\Models\Pizza;
use Illuminate\Support\Facades\Route;

// Ruta principal para la página home
Route::resource('pizzas', PizzaController::class);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/menu/{pizzeria}', function ($pizzeria) {
    return view('menu', ['pizzeria' => $pizzeria]);
})->name('menu');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/pizzas', function() {
    $pizzas = Pizza::all();
    return view('pizzas.index', compact('pizzas'));
})->middleware(["auth", "verified"])->name("pizzas");


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
