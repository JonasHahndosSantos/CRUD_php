
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('pokemon') }}" method="GET">
    @csrf
    @method('GET')
    <input type="text" name="nome" placeholder="Nome do pokemon" required>
    <input type="text" name="tipo" placeholder="tipo" required>
    <input type="number" name="pontos_de_poder" placeholder="pontos  de poder" required>

    <button type="submit">Registrar novo Pokemon</button>
</form>
</body>
</html>