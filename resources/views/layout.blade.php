<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        @include('header')
    </header>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
