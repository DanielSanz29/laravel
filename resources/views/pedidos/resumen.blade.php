@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Resumen del Pedido</h2>

        <div class="card" style="width: 18rem;">
            @if($pizza)
                <img src="{{ $pizza->image }}" class="card-img-top" alt="{{ $pizza->name }}">
            @else
                <p>No se encontró la imagen de la pizza.</p>
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $pedido->producto }}</h5>
                <p class="card-text">Cantidad: {{ $pedido->cantidad }}</p>
                @if($pizza)
                    <p><strong>Precio:</strong> ${{ number_format($pizza->price, 2) }}</p>
                @else
                    <p><strong>Precio:</strong> Información no disponible.</p>
                @endif
                <a href="{{ route('pedidos.confirmar', $pedido->id) }}" class="btn btn-primary">Confirmar Pedido</a>
            </div>
        </div>
    </div>
@endsection
