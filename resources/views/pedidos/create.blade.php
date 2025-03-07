@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Hacer un Pedido</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container">
            <h2>Selecciona tu Pizza</h2>
            <form action="{{ route('pedidos.store') }}" method="POST">
                @csrf
                <div class="row">
                    @foreach ($pizzas as $pizza)
                        <div class="col-md-4">
                            <div class="card">
                                <img src="{{ $pizza->image }}" class="card-img-top" alt="{{ $pizza->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $pizza->name }}</h5>
                                    <p class="card-text">{{ $pizza->description }}</p>
                                    <input type="radio" name="producto" value="{{ $pizza->name }}" required> Seleccionar
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3">
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" name="cantidad" id="cantidad" min="1" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Hacer Pedido</button>
            </form>

@endsection
