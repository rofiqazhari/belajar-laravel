<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Barang</title>
</head>
<body>
    <a href="dashboard">HALAMAN DEPAN</a>
    <form action="login_act" method="post">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-6">Nama</div>
        <div class="col-6"><input type="text" name="nama" placeholder="Nama"></div>
    </div>
    <div class="row">   
        <div class="col-6">Kategori</div>
        <div class="col-6"><input type="text" name="kategori" placeholder="Kategori"></div>
    </div>    
    <div class="row">
        <div class="col-12">
        <input type="submit" value="Simpan">
        </div>
    <div>
    </form>  
</body>
</html>