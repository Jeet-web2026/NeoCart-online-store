<x-main-layout tittle="Home" bodyId ="main-content">
    @include('components.navbar')
    {{ $slot }}
</x-main-layout>