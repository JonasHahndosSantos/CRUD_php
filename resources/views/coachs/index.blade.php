<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar pokemon</title>
</head>
<body>
    @foreach($coachs as $coach)
    <div>
        <h3>{{ $coach->name }}</h3>
        <p>{{ $coach->description }}</p>
        <a href="{{ url('coach/'.$coach->id.'/edit') }}">Edit</a>
        <form action="{{ url('coach/'.$coach->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </div>
@endforeach
</body>
</html>