<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pizza</title>
</head>
<body>
<h1>Editar pizza: {{ $pizza->name }}</h1>

<form action="{{ route('pizzas.update', $pizza->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" value="{{ $pizza->name }}" required><br>

    <label for="description">Descripción:</label>
    <textarea name="description" id="description" required>{{ $pizza->description }}</textarea><br>

    <label for="price">Precio:</label>
    <input type="number" step="0.01" name="price" id="price" value="{{ $pizza->price }}" required><br>

    <button type="submit">Actualizar</button>
</form>
</body>
</html>
