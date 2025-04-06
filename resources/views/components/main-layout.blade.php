@props(['subheading' => '', 'metadata' => '', 'metadescription' => ''])
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if($subheading){{ $subheading }} |@endif {{ config('app.name') }}</title>
    <meta name="Csrf-token" content="{{ csrf_token() }}">
    @if($metadata)<meta name="{{ $metadescription }}" content="{{ $metadata }}">@endif
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

</body>

</html>