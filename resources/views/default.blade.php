<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
</head>
<body>
<header class="site-header">
    <div class="container">
        <div class="logo">PRIME NEWS IN GOMEL</div>
        <nav class="header-menu">
            <ul>
                <li><a href="#">News</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Portfolio</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
</body>
</html>