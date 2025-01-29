@props(['btnDes' => '', 'href' => '', 'type' => ''])
<a @if($href)href="{{ $href }}"@endif @if($type)type="{{ $type }}"@endif class="bg-warning btn border-0 mt-3 text-light">{{ $btnDes }}</a>