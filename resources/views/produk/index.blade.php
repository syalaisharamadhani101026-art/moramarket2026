<!DOCTYPE html>
<html>
<head>
<title>Tambah Produk MoraMarket</title>

<style>

body{
    font-family:'Segoe UI', sans-serif;
    background:linear-gradient(135deg,#6c63ff,#8e7dff);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    margin:0;
}

.card{
    background:white;
    padding:30px;
    width:400px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    margin-bottom:20px;
}

.input-group{
    margin-bottom:15px;
}

input{
    width:100%;
    padding:10px;
    border-radius:8px;
    border:1px solid #ccc;
    outline:none;
}

input:focus{
    border-color:#6c63ff;
}

button{
    width:100%;
    padding:10px;
    background:#6c63ff;
    border:none;
    color:white;
    font-size:16px;
    border-radius:8px;
    cursor:pointer;
}

button:hover{
    background:#5848e5;
}

.back{
    text-align:center;
    margin-top:10px;
}

.back a{
    text-decoration:none;
    color:#6c63ff;
}

</style>

</head>

<body>

<div class="card">

<h2>Tambah Produk</h2>

<form action="/produk/simpan" method="POST">
@csrf

<div class="input-group">
<input type="text" name="nama_produk" placeholder="Nama Produk" required>
</div>

<div class="input-group">
<input type="number" name="harga" placeholder="Harga Produk" required>
</div>

<div class="input-group">
<input type="number" name="stok" placeholder="Stok Produk" required>
</div>

<div class="input-group">
<input type="text" name="kategori" placeholder="Kategori Produk" required>
</div>

<button type="submit">Simpan Produk</button>

</form>

<div class="back">
<a href="/produk">← Kembali ke daftar produk</a>
</div>

</div>

</body>
</html>