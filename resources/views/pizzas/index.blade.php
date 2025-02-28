@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Nuestro Menú</h1>

        <!-- Botón para crear nueva pizza -->
        <div class="text-end mb-3">
            <a href="{{ route('pizzas.create') }}" class="btn btn-success">Crear nueva pizza</a>
        </div>

        <!-- Lista de pizzas -->
        @if ($pizzas->count() > 0)
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($pizzas as $pizza)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset($pizza->image) }}" class="card-img-top" alt="{{ $pizza->name }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $pizza->name }}</h5>
                                <p class="card-text">{{ Str::limit($pizza->description, 100) }}</p>
                                <p class="card-text font-weight-bold">{{ $pizza->price }}€</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="{{ route('pizzas.show', $pizza->id) }}" class="btn btn-primary">Ver</a>
                                <a href="{{ route('pizzas.edit', $pizza->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No hay pizzas disponibles en este momento.</p>
        @endif
    </div>

@endsection
