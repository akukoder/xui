@props(['grid' => '1'])

@php
$gridClass = 'grid grid-cols-' . $grid;
@endphp

<div {{ $attributes->merge(['class' => $gridClass]) }}>
    {!! $slot !!}
</div>