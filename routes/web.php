<?php
use App\Http\Controllers\PizzaController;

use Illuminate\Support\Facades\Route;

// Ruta principal para la página home
Route::resource('pizzas', PizzaController::class);
// Rutas para las pizzas

Route::resource('pizzas', PizzaController::class);
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/menu/{pizzeria}', function ($pizzeria) {
    return view('menu', ['pizzeria' => $pizzeria]);
})->name('menu');
Route::resource('pizzas', PizzaController::class);


Route::get('/', function () {
    return view('index');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::get('/', function () {
    return redirect()->route('pizzas.index');
});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
