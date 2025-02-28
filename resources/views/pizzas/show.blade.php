<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pizza->name }}</title>
</head>
<body>
<h1>{{ $pizza->name }}</h1>
<p>{{ $pizza->description }}</p>
<p>Precio: {{ $pizza->price }}€</p>

<a href="{{ route('pizzas.edit', $pizza->id) }}">Editar</a>
<form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Eliminar</button>
</form>
</body>
</html>
