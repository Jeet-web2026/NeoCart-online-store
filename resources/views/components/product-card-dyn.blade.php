@props(['featured' => '', 'image' => '', 'companyName' => '', 'productName' => '', 'productPrice' => ''])

<div class="col me-3">
    <a href="javascript:void(0)">
        <div class="card border-0 shadow-sm no-radius position-relative pt-3 pb-2" style="background-color: #F3F3F5;">
            @if(!empty($featured))
            <span class="text-light bg-warning position-absolute px-2 fze text-capitalize no-radius">featured</span>
            @endif
            <div class="d-flex justify-content-center align-items-center px-5">
                @if(!empty($companyName)) {{-- Fixed: companyname to companyName --}}
                <img src="{{ $image }}" class="card-img-top no-radius" alt="{{ $companyName }}">
                @endif
            </div>
            <div class="card-body">
                <p class="text-capitalize fze-1 text-secondary mb-2">{{ $companyName }}</p>
                <h5 class="card-title fze-2 text-capitalize text-black font-500">{{ $productName }}</h5>
                <div class="d-flex justify-content-start align-items-center mb-3">
                    <i class="bi bi-star-fill fze text-warning"></i>
                    <i class="bi bi-star-fill fze text-warning"></i>
                    <i class="bi bi-star-fill fze text-warning"></i>
                    <i class="bi bi-star-fill fze text-warning"></i>
                    <i class="bi bi-star-fill fze text-warning"></i>
                    <span class="ms-2 text-secondary">21 comments</span>
                </div>
                <h4 class="fze-2 text-capitalize mb-2 fw-bold">{{ $productPrice }}</h4>
            </div>
        </div>
    </a>
</div>