<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @section('header')
        @include('layouts.header')
    @show

    <div class="content">
        @yield('content')
    </div>

    @section('footer')
        @include('layouts.footer')
    @show
</body>
</html>