@props(['links' => []])

<nav class="navbar navbar-expand-lg bg-dark position-absolute w-100 shadow-sm">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @if(!empty($links))
                @foreach($links as $singleLink)
                <li class="nav-item me-2">
                    <a id="{{ $singleLink['idname'] }}" class="nav-link text-capitalize" href="javascript:void(0)">{{ $singleLink['name'] }}</a>
                </li>
                @endforeach
                @endif
            </ul>
            <form class="d-flex ms-2" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>