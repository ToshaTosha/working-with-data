<form action="{{ route('books.store') }}" method="POST">
  @csrf

  <div class="form-group">
    <label for="title">Заголовок:</label>
    <input type="text" placeholder="title" name="title" class="form-control">
  </div>

  <div class="form-group">
    <label>Жанры:</label>
    <select name="genres[]" class="form-control" multiple>
      @foreach($genres as $genre)
        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
      @endforeach
    </select>
  </div>

  <button type="submit">Отправить</button>
</form>
