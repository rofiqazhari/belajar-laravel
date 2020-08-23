<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-reboot.min.css') }}">
    <script type="text/javascript" src="{{ asset('/js/jquery.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('/js/bootstrap.js.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>                                    
</head>
<body>

<div class="container">
  <form action="login_act" method="post">
  {{ csrf_field() }}      
  <div class="row justify-content-lg-center mt-5 mb-4">
    <div class="col-lg-4 text-center">
    <h3>LOGIN</h3></div>
  </div>          
  <div class="row justify-content-lg-center mb-2">
    <div class="col-lg-4">
        <input type="text" name="user" class="form-control" placeholder="Username" required="" autofocus="">
    </div>    
  </div>
  <div class="row justify-content-lg-center mb-4">
      <div class="col-lg-4">
        <input type="password" name="password" class="form-control" placeholder="Password" required="">
      </div>  
  </div>
  <div class="row justify-content-lg-center">
      <div class="col-lg-4 text-center">
      <button class="btn btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">Software Developer Kediri © 2020</p>
      </div>  
  </div>
  </form>
</div>
</body>
</html>