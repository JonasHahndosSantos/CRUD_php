<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('coach') }}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name="nome" placeholder="Nome do treinador" required>
    <button type="submit">Atualiza o treinador</button>
</form>
</body>
</html>