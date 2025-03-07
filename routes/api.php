<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\PedidoController;
use App\Models\Pedido;
use App\Models\Pizza;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/pedidos/{id}', [PedidoController::class, 'show']);
