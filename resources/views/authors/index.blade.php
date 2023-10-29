<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAFTAR PENULIS</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
<center></center>
    <h2>DAFTAR PENULIS</h2>
    <a href="{{ route('authors.create') }}" class="create-link">+Tambah</a>
      @if (session()->has('pesan'))
            <div style="color: green;">
                {{ session()->get('pesan') }}
            </div>
            <br>
        @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </thead>
        <?php $i = 1?>
        @foreach ($authors as $author )
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $author->author }}</td>
            <td>{{ $author->email }}</td>
            <td>{{ $author->address }}</td>
            <td class="action-buttons">
                <a href="{{ route('authors.edit', $author->id) }}" class="button edit-button">Edit</a>
                <form action="{{ route('authors.destroy', $author->id) }}" method="post" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Hapus" onclick="return confirm('Yakin ingin menghapus penulis {{ $author->author }}?')" class="button delete-button">
                </form>
                <a href="{{ route('authors.show', $author->id) }}" class="button show-button">Show</a>
            </td>
        </tr>
        <?php $i++?>
        @endforeach

    </table>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>