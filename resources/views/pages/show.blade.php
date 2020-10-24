<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Show Product</title>
</head>
<body>
    <div class="mt-3 ml-3">
        <h4> {{ $post->nama_produk }} </h4>
        <p> {{ $post->keterangan }} </p>
        <p> {{ $post->jumlah }} </p>
        <p> {{ $post->harga }} </p>
    </div>
</body>
</html>
