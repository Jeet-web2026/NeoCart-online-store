<x-main-layout tittle="Home" bodyId="main-content" description="1">
    @include('components.navbar')
    {{ $slot }}
    @include('components.home-popups')
</x-main-layout>