@props(['btnDes' => '', 'href' => '', 'type' => '', 'style' => '', 'extraclass' => '', 'icon' => ''])
<a @if($href)href="{{ $href }}" @endif @if($type)type="{{ $type }}" @endif @if($style)style="{{ $style }}" @endif class="bg-warning btn border-0 text-light @if($extraclass) {{ $extraclass }}@endif">
    @if (!empty($btnDes))
    {{ $btnDes }}
    @elseif (!empty($icon))
    {!! $icon !!}
    @endif
</a>