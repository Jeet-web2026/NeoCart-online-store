<!DOCTYPE html>
<html lang="{{ str_replace( '_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Csrf-token" content="{{ csrf_token() }}">
    <title>@yield ('tittle') | {{ config('app.name') }}</title>

    @yield('css-cdn')
    @yield('universal-css')
    @yield('pages-css')
</head>

<body>

</body>

</html>