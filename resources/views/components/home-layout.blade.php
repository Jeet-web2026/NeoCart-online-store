<x-main-layout tittle="Home" bodyId="main-content">
    @section('page-css')
    <style>
        #main-content {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 30vh;
        }

        #main-content .home-main-content .card-img {
            height: 50vh;
            object-fit: cover;
            width: 100%;
        }
    </style>
    @endsection
    @include('components.navbar')
    {{ $slot }}
</x-main-layout>