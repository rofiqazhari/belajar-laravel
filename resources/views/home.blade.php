<!doctype html>
<html>
<head>
    @include('head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('header')
    </header>

    <div id="main" class="row">

            @yield('isinya')

    </div>

    <footer class="row">
        @include('footer')
    </footer>

</div>
</body>
</html>