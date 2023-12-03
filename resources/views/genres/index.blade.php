<!DOCTYPE html>
<html>
<head>
    <title>Список жанров</title>
</head>
<body>
    <h1>Список жанров</h1>

    <ul>
        @foreach($genres as $genre)
            <li>{{ $genre->name }}</li>
        @endforeach
    </ul>
</body>
</html>
