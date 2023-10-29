<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    
<form class="book-form" action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title" class="form-label">Judul buku:</label>
        <input type="text" name="title" id="title" class="form-input" value="{{ old('title', $book->title) }}" />
        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="author" class="form-label">Penulis:</label>
        <input type="text" name="author" id="author" class="form-input" value="{{ old('author', $book->author) }}" />
        @error('author')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="description" class="form-label">Deskripsi:</label>
        <textarea name="description" id="description" class="form-textarea">{{ old('description', $book->description) }}</textarea>
        @error('description')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="form-submit">
    </div>
</form>

    
</body>
</html>
