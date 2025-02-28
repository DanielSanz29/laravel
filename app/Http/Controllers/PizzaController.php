<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    // Mostrar todas las pizzas
    public function index()
    {
        $pizzas = Pizza::all(); // Obtener todas las pizzas de la base de datos
        return view('pizzas.index', compact('pizzas')); // Pasar las pizzas a la vista
    }

    // Mostrar formulario para crear una pizza
    public function create()
    {
        return view('pizzas.create');
    }

    // Guardar una nueva pizza
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        Pizza::create($validated);

        return redirect()->route('pizzas.index')->with('success', 'Pizza creada exitosamente.');
    }

    // Mostrar detalles de una pizza
    public function show(Pizza $pizza)
    {
        return view('pizzas.show', compact('pizza'));
    }

    // Mostrar formulario para editar una pizza
    public function edit(Pizza $pizza)
    {
        return view('pizzas.edit', compact('pizza'));
    }

    // Actualizar una pizza
    public function update(Request $request, Pizza $pizza)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        $pizza->update($validated);

        return redirect()->route('pizzas.index')->with('success', 'Pizza actualizada exitosamente.');
    }

    // Eliminar una pizza
    public function destroy(Pizza $pizza)
    {
        $pizza->delete();

        return redirect()->route('pizzas.index')->with('success', 'Pizza eliminada exitosamente.');
    }
}
