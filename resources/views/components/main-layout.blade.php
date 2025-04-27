@props(['subtitle' => '', 'metaname' => '', 'metaDescription' => '', 'bootstrap' => ''])
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Csrf-token" content="{{ csrf_token() }}">
    @if($metaname)
    <meta name="{{ $metaname }}" content="{{ $metaDescription }}">
    @endif
    <title>@if($subtitle) {{ $subtitle }} | @endif {{ config('app.name') }} - The Best Ecommerce Platform for your needs</title>

    {{--booststrap css cdn--}}
    @if($bootstrap)
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    @endif
    {{--booststrap css cdn--}}

    {{--Default styling--}}
    {{--Default styling--}}

    {{--custom page wise styling--}}
    @yield('customcss')
    {{--custom page wise styling--}}

</head>

<body>
    {{ $slot }}

    {{--booststrap js cdn--}}
    @if($bootstrap)
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    @endif
    {{--booststrap js cdn--}}

</body>

</html>