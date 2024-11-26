<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinador Pokemon</title>
</head>
<body>
    <form action="{{ url('coach') }}" method="GET">
    @csrf
    @method('GET')
    <input type="text" name="nome" placeholder="Nome do Treinador" required>

    <button type="submit">Registrar novo Treinador</button>
</form>
</body>
</html>