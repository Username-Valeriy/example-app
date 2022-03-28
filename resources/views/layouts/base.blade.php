<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @section('head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    @endsection
    @yield('head')
</head>
<body>
@section('header')
    <header>header</header>
@show

@section('main')
@show

@section('footer')
    <footer>
        footer
    </footer>
@show
</body>
</html>
