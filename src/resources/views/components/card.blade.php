@props(['shadow' => 'shadow'])

@php
$defaultClass = 'relative flex flex-col min-w-0 break-words w-full rounded border-0 bg-white ' . $shadow;
@endphp

<div {{ $attributes->merge(['class' => $defaultClass]) }}>
    {!! $slot !!}
</div>
