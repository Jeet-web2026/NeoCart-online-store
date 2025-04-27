@props(['subtitle' => ''])
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if($subtitle) {{ $subtitle }} | @endif {{ config('app.name') }} - The Best Ecommerce Platform for your needs</title>
</head>

<body>
    {{ $slot }}
</body>

</html>