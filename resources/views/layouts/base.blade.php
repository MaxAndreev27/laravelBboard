<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a href="{{ route('index') }}" class="navbar-brand mr-auto">Головна</a>
        @guest()
        <a href="{{ route('register') }}" class="nav-item nav-link">Реєстрація</a>
        <a href="{{ route('login') }}" class="nav-item nav-link">Вхід</a>
        @endguest
        @auth()
        <a href="{{ route('home') }}" class="nav-item nav-link">Мої оголошення</a>
        <form action="{{ route('logout') }}" method="POST" class="form-inline">
            @csrf
            <input type="submit" class="btn btn-danger" value="Вихід">
        </form>
        @endauth
    </nav>

    @yield('main')
</div>
</body>
</html>

