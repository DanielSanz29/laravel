@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>¡Pedido Confirmado!</h2>
        <p>Tu pedido ha sido confirmado exitosamente. ID del pedido: {{ $id }}.</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Volver al inicio</a>
    </div>
@endsection
