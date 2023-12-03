<!DOCTYPE html>
<html>
<head>
    <title>Создать жанр</title>
</head>
<body>
    <h1>Создать новый жанр</h1>

    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Название жанра:</label>
            <input type="text" id="name" name="name">
        </div>

        <button type="submit">Сохранить</button>
    </form>
</body>
</html>
