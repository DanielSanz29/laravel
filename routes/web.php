<?php
use App\Http\Controllers\PizzaController;

use App\Models\Pizza;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

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
//cambiar idioma
Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'es', 'fr'])) {
        abort(400); // Evita idiomas no permitidos
    }
    Session::put('locale', $locale);
    App::setLocale($locale);
    return Redirect::back();
})->name('lang.change');


// Ruta para cerrar sesión
Route::post('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
    ->name('logout')
    ->middleware('auth');

require __DIR__.'/auth.php';
