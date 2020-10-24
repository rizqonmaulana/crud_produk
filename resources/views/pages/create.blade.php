<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Tambahkan Produk</title>
</head>
<body>
    <form role="form" action=" {{ route('produk.store') }} " method="POST">
        @csrf
          <div class="card-body">
            <h3>Tambahkan Produk</h3>
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', '') }}" placeholder="Masukan nama produk">
              @error('nama_produk')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan Keterangan">{{ old('keterangan', '') }}</textarea>
              @error('keterangan')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <textarea type="text" class="form-control" id="harga" name="harga" placeholder="Masukan harga">{{ old('harga', '') }}</textarea>
                @error('harga')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <textarea type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan jumlah">{{ old('jumlah', '') }}</textarea>
                @error('jumlah')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
</body>
</html>
