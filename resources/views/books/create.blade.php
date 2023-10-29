
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAMBAH BUKU</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
     <h4 class="tambah buku">TAMBAH BUKU</h4>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Judul buku:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title',) }}" />
            <br>
    
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="author">Penulis:</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}" />
            <br>
    
            @error('author')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
            <br>
    
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
    
        <div class="form-group">
            <input type="submit" class="submit-button" value="Simpan">
        </div>
    </form>
    
</body>
</html>