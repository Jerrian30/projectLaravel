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
    <h1>DATA BUKU</h1>

<div class="book-info">
    <div class="book-field">
        <strong>Judul:</strong> {{ $book->title }}
    </div>
    <div class="book-field">
        <strong>Penulis:</strong> {{ $book->author }}
    </div>
    <div class="book-field">
        <strong>Deskripsi:</strong> {{ $book->description }}
    </div>
</div>
    
</body>
</html>

