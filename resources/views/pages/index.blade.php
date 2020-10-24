<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Tabel Produk</title>
</head>
<body>
    <div class="mt-3 mx-3">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tabel Produk</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                  <a href=" {{ route('produk.create') }} " class="btn btn-primary mb-2">Tambah Produk Baru</a>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th style="width: 40px">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $key => $post)
                    <tr>
                        <td> {{ $key + 1 }}</td>
                        <td> {{ $post->nama_produk }} </td>
                        <td> {{ $post->keterangan }} </td>
                        <td> {{ $post->harga }} </td>
                        <td> {{ $post->jumlah }} </td>
                        <td  style="display: flex;">
                            <a href="{{ route('produk.show', ['produk' => $post->id]) }}" class="btn btn-info btn-sm mr-1">show</a>
                            <a href="{{ route('produk.edit', ['produk' => $post->id]) }}" class="btn btn-warning btn-sm mr-1">edit</a>
                            <form action=" {{ route('produk.destroy', ['produk' => $post->id]) }} " method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm" value="delete">
                            </form>
                        </td>
                      </tr>
                    @empty
                      <tr>
                          <td colspan="4" align="center"> No Data </td>
                      </tr>
                    @endforelse
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            {{-- <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div> --}}
          </div>
    </div>
</body>
</html>
