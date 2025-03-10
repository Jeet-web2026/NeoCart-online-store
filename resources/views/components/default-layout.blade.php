@props(['title' => '', 'bodyId' => '', 'bodyClass' => ''])
<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Csrf_token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('essentials/images/logo.png') }}" type="image/x-icon">
    <title>@if($title){{ $title }} |@endif {{ config('app.name') }}</title>

    {{--bootstrap css cdn--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{--bootstrap css cdn--}}

    {{--bootstrap icons cdn--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{--bootstrap icons cdn--}}

    {{--fontawesome css cdn--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--fontawesome css cdn--}}

    {{--google fonts link 1--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    {{--google fonts link 1--}}

    {{--google fonts link 2--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    {{--google fonts link 2--}}

    @yield('extracsscdns')
    {{--universal css link--}}
    <link rel="stylesheet" href="{{ asset('essentials/css/unv.css') }}">
    {{--universal css link--}}

    <style>
        body {
            background-color: #fcfafb;
        }
    </style>
    @yield('extracss')

</head>

<body @if($bodyId)id="{{ $bodyId }}" @endif @if($bodyClass)class="{{ $bodyClass }}" @endif>
    {{ $slot }}

    @yield('extrajscdns')
    {{--bootstrap js cdn--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{--bootstrap js cdn--}}

    @yield('extrajs')
</body>

</html>