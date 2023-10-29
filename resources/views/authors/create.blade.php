<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAMBAH PENULIS</title>  
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <h4 class="tambah buku">TAMBAH PENULIS</h4>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="author">Penulis</label>
            <input type="text" name="author" id="author" value="{{ old('author') }}">

            @error('author')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">

            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="address">Alamat</label>
            <input type="text" name="address" id="address" value="{{ old('address') }}">

            @error('address')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value="Simpan" class="submit-button">

    </form>
    
</body>
</html>