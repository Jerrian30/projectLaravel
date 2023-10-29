<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <center>
        <h3>DAFTAR PENULIS</h3>
        
        @if (session()->has('pesan'))
            <div style="color: green;">
                {{ session()->get('pesan') }}
            </div>
            <br>
        @endif
     <a href="{{ route('books.create') }}" class="create-link">+Tambah</a>
            <div>
                    <table border="1" cellpadding="20" cellspacing="0">
                        <thead>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Deskripsi</th>
                            <th>aksi</th>
                        </thead>
                        <?php $i=1?>
                        @foreach ($books as $book)
                        
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->description }}</td>
                            <td class="action-buttons">
                                <a href="{{ route('books.edit', $book->id) }}" class="button edit-button">Edit</a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="post" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Hapus" onclick="return confirm('Yakin ingin menghapus penulis {{ $book->book }}?')" class="button delete-button">
                                </form>
                                <a href="{{ route('books.show', $book->id) }}" class="button show-button">Show</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach
                    </table>
                
                <br>
   
            </div>
        </center>
    
</body>
</html>