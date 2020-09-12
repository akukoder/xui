@props(['start' => '', 'end' => '', 'size' => ''])

@php
    $colStart = (! empty($start)) ? ' col-start-' . $start : '';
    $colEnd = (! empty($end)) ? ' col-start-' . $end : '';
    $colSize = (! empty($size)) ? ' col-span-' . $size : '';
@endphp

<div {{ $attributes->merge(['class' => $colStart.$colEnd.$colSize]) }}>
    {!! $slot !!}
</div>