<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }
    public function create()
    {
        $pizzas = Pizza::all(); // Obtener todas las pizzas disponibles
        return view('pedidos.create', compact('pizzas'));
    }

    public function store(Request $request)
    {
        // Validar que el campo 'producto' no esté vacío
        $request->validate([
            'producto' => 'required|exists:pizzas,name', // Asegura que el producto existe en la tabla pizzas
            'cantidad' => 'required|integer|min:1', // Validar que la cantidad es un número entero positivo
        ]);

        // Crear el pedido, guardando el nombre de la pizza, la cantidad y el user_id (usuario autenticado)
        $pedido = Pedido::create([
            'producto' => $request->producto,
            'cantidad' => $request->cantidad,
            'user_id' => auth()->id(), // Esto asigna el usuario autenticado al pedido
        ]);

        // Redirigir al resumen con el ID del pedido.
        return redirect()->route('pedidos.resumen', $pedido->id);
    }


    public function resumen($id)
    {
        // Obtener el pedido por su ID.
        $pedido = Pedido::findOrFail($id);

        // Buscar la pizza que coincide con el nombre del producto en el pedido.
        $pizza = Pizza::where('name', $pedido->producto)->first();  // Buscar pizza por el nombre

        // Pasar el pedido y la pizza a la vista.
        return view('pedidos.resumen', compact('pedido', 'pizza'));
    }
    public function confirmar($id)
    {
        // Buscar el pedido por su ID
        $pedido = Pedido::findOrFail($id);

        // Puedes realizar las acciones de confirmación aquí, como actualizar el estado del pedido o enviar un correo.

        // Redirigir al usuario a una página de éxito o confirmar el pedido.
        return redirect()->route('pedidos.exito', $pedido->id);
    }
    public function exito($id)
    {
        // Aquí puedes mostrar un mensaje de éxito
        return view('pedidos.exito', compact('id'));
    }

}
