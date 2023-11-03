


    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h1 class="subheader">Data Penulis</h1>

                <a href="{{ route('authors.index') }}" class="btn btn-primary btn-rounded btn-sm btn-30">Kembali</a>
            </div>

            <div class="card mt-3">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <td>Nama</td>
                            <td><span class="font-weight-bold">{{ $author->name }}</span></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><span class="font-weight-bold">{{ $author->email }}</span></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><span class="font-weight-bold">{{ $author->address }}</span></td>
                        </tr>
                        <tr>
                            <td>Jumlah Buku</td>
                            <td><span class="font-weight-bold">{{ $author->books_count }}</span></td>
                        </tr>
                    </table>
                </div>
              