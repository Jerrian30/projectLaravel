<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>
    <h1>DATA PENULIS</h1>

<div class="book-info">
    <div class="book-field">
        <strong>Judul:</strong> {{ $author->author }}
    </div>
    <div class="book-field">
        <strong>Penulis:</strong> {{ $author->email }}
    </div>
    <div class="book-field">
        <strong>Deskripsi:</strong> {{ $author->address }}
    </div>
</div>
    
</body>
</html>

