<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Pizza</title>
</head>
<body>
<h1>Crear nueva pizza</h1>

<form action="{{ route('pizzas.store') }}" method="POST">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="description">Descripción:</label>
    <textarea name="description" id="description" required></textarea><br>

    <label for="price">Precio:</label>
    <input type="number" step="0.01" name="price" id="price" required><br>

    <button type="submit">Guardar</button>
</form>
</body>
</html>
