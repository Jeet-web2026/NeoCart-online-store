<x-main-layout tittle="Home" bodyId="main-content">
    @section('page-css')
    <link rel="stylesheet" href="{{ asset('essentials/css/home-style.css') }}">
    @endsection
    @include('components.navbar')
    {{ $slot }}
    @include('components.home-popups')
</x-main-layout>