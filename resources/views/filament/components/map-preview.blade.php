@php
    $latValue = is_callable($lat) ? $lat() : $lat;
    $lngValue = is_callable($lng) ? $lng() : $lng;
@endphp

@if ($latValue && $lngValue)
    <iframe
        width="100%"
        height="300"
        frameborder="0"
        style="border:0"
        src="https://www.google.com/maps?q={{ $latValue }},{{ $lngValue }}&hl=es;z=14&output=embed"
        allowfullscreen>
    </iframe>
@endif