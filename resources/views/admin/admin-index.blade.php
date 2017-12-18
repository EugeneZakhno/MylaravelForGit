<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="collapsed navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-6" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a href="/" class="navbar-brand">Site</a></div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
            <ul class="nav navbar-nav">
                <li><a href="/admin-panel">All posts</a></li>
                <li><a href="/admin-panel/create">Create new post</a></li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container">
        <div class="row">
            @include('admin.part.msg')
            @yield('content')
        </div>
    </div>
</body>
</html>