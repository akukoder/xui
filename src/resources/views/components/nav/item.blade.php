@props(['href' => '#xui'])
@php
    $defaultClass = 'px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-gray-700 hover:opacity-75';
@endphp

<li class="nav-item">
    <a {{ $attributes->merge(['class' => $defaultClass]) }} href="{{ $href }}">
        {!! $slot !!}
    </a>
</li>