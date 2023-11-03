
<h1 class="subheader">Kelola Buku</h1>
<a href="{{ route('books.create') }}" class="btn btn-primary btn-rounded btn-sm btn-30"></i> Tambah</a>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $i=1 ?>
         @foreach ($books as $book)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->description }}</td>
                <td class="text-end">
                    <a href="{{ route('books.show', $book) }}">Lihat</a>
                    <a href="{{ route('books.edit', $book) }}">Edit</a>
                </td>
            </tr>
            <?php $i++?>
         @endforeach
    </tbody>
</table>
        