@props(['subtitle' => '', 'metaname' => '', 'metaDescription' => '', 'bootstrap' => '', 'jquery' => '', 'poppins' => '', 'figtree' => ''])
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Csrf-token" content="{{ csrf_token() }}">
    @if($metaname)
    <meta name="{{ $metaname }}" content="{{ $metaDescription }}">
    @endif
    <title>@if($subtitle) {{ $subtitle }} | @endif {{ config('app.name') }} - The Best Ecommerce Platform for Your Needs</title>

    {{--gogle poppins font--}}
    @if($poppins)
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @endif
    {{--gogle poppins font--}}

    {{--google figtree font--}}
    @if($figtree)
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    @endif
    {{--google figtree font--}}

    {{--booststrap css cdn--}}
    @if($bootstrap)
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    @endif
    {{--booststrap css cdn--}}

    {{--Default styling--}}
    @if($poppins)
    <style>
        * {
            font-family: "Poppins", sans-serif;
            font-style: normal;
        }
    </style>
    @endif
    @if($figtree)
    <style>
        * {
            font-family: "Figtree", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
    </style>
    @endif
    {{--Default styling--}}

    {{--custom page wise styling--}}
    @yield('customcss')
    {{--custom page wise styling--}}

</head>

<body>
    {{ $slot }}

    {{--jquery js cdn--}}
    @if($jquery)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endif
    {{--jquery js cdn--}}
    {{--booststrap js cdn--}}
    @if($bootstrap)
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    @endif
    {{--booststrap js cdn--}}

    {{--custom page wise js--}}
    @yield('customjs')
    {{--custom page wise js--}}

</body>

</html>