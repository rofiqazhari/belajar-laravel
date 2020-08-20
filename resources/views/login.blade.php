<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body><center>
<h1>Login</h1>          
<form action="login_act" method="post">
{{ csrf_field() }}
<div class="row">
    <div class="col-6">User</div>
    <div class="col-6"><input type="text" name="user" placeholder="Username"></div>
</div>
<div class="row">
    <div class="col-6">Password</div>
    <div class="col-6"><input type="password" name="password" placeholder="Password"></div>
</div>    
<div class="row">
    <div class="col-12">
    <input type="submit" value="Simpan">
    </div>
<div>
</form>
</body>
</html>