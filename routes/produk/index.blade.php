<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk MoraMarket</title>
</head>
<body>

<h1>Daftar Produk MoraMarket</h1>

<table border="1">
<tr>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Kategori</th>
</tr>

@foreach($produk as $p)
<tr>
    <td>{{ $p->nama_produk }}</td>
    <td>{{ $p->harga }}</td>
    <td>{{ $p->stok }}</td>
    <td>{{ $p->kategori }}</td>
</tr>
@endforeach

</table>

</body>
</html>