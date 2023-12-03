<!DOCTYPE html>
<html>
<head>
    <title>Список книг</title>
</head>
<body>
    <h1>Список книг</h1>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }} ({{ $book->genres->implode('name', ', ') }})</li>
        @endforeach
    </ul>
</body>
</html>