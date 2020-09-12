@props(['href' => '#xui'])

<a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase" href="{{ $href }}">
    {!! $slot !!}
</a>