<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Perbarui Produk</title>
</head>
<body>
    <form role="form" action=" {{ route('produk.update', ['produk' => $post->id]) }} " method="POST">
        @csrf
        @method('PUT')
          <div class="card-body">
            <h3>Perbarui Produk {{ $post->id }} </h3>
            <div class="form-group">
              <label for="nama_produk">Nama</label>
              <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $post->nama_produk) }}" placeholder="Masukan nama produk">
              @error('nama_produk')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan">{{ old('keterangan', $post->keterangan) }}</textarea>
              @error('keterangan')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <textarea type="text" class="form-control" id="harga" name="harga" placeholder="Masukan harga">{{ old('harga', $post->harga) }}</textarea>
                @error('harga')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <textarea type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan jumlah">{{ old('jumlah', $post->jumlah) }}</textarea>
                @error('jumlah')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </form>

</body>
</html>
