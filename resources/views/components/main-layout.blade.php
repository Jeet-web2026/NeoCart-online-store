@props(['subheading' => '', 'metadata' => '', 'metadescription' => '', 'tailwind' => '', 'bootstrap' => ''])
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if($subheading){{ $subheading }} |@endif {{ config('app.name') }}</title>
    <meta name="Csrf-token" content="{{ csrf_token() }}">
    @if($metadata)
    <meta name="{{ $metadescription }}" content="{{ $metadata }}">
    @endif
    @if($tailwind)
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @endif
    @if($bootstrap)
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    @endif
</head>

<body>


    @if($bootstrap)
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    @endif
</body>

</html>