
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($pokemons as $pokemon)
    <div>
        <h3>{{ $pokemon->name }}</h3>
        <p>{{ $pokemon->description }}</p>
        <a href="{{ url('pokemon/'.$pokemon->id.'/edit') }}">Edit</a>
        <form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </div>
@endforeach
</body>
</html>