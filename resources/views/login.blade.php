<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body><center>
<a href="/laravel1">HALAMAN DEPAN</a>
<h1>Login</h1>  
<form action="login_act" method="post">
<input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
<div class="row">
    <div class="col-6">User</div>
    <div class="col-6"><input type="text" name="user" placeholder="{{ $usere }}"></div>
</div>
<div class="row">
    <div class="col-6">Password</div>
    <div class="col-6"><input type="password" name="password" placeholder="{{ $passe }}"></div>
</div>    
<div class="row">
    <div class="col-12">
    <input type="submit" value="Simpan">
    </div>
<div>
</form>
</body>
</html>