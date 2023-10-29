<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT PENULIS</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    
<form class="book-form" action="{{ route('authors.update', $author->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="author" class="form-label">Penulis</label>
        <input type="text" name="author" id="author" class="form-input" value="{{ old('author', $author->author) }}" />
        @error('author')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" id="email" class="form-input" value="{{ old('email', $author->email) }}" />
        @error('email')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="address" class="form-label">Alamat:</label>
        <textarea name="address" id="address" class="form-textarea">{{ old('address', $author->address) }}</textarea>
        @error('address')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="form-submit">
    </div>
</form>

    
</body>
</html>
