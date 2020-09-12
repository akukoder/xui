@props(['type' => ''])

@php
    switch ($type) {
        default:
            $background = 'bg-gray-200 shadow border-0 border-l-4 border-gray-500 text-gray-700 px-4 py-5 flex-auto';
            break;

        case 'primary':
            $background = 'bg-blue-200 shadow border-0 border-l-4 border-blue-500 text-blue-700 px-4 py-5 flex-auto';
            break;

        case 'info':
            $background = 'bg-teal-200 shadow border-0 border-l-4 border-teal-500 text-teal-700 px-4 py-5 flex-auto';
            break;

        case 'success':
            $background = 'bg-green-200 shadow border-0 border-l-4 border-green-500 text-green-700 px-4 py-5 flex-auto';
            break;

        case 'warning':
            $background = 'bg-orange-200 shadow border-0 border-l-4 border-orange-500 text-orange-700 px-4 py-5 flex-auto';
            break;

        case 'danger':
            $background = 'bg-red-200 shadow border-0 border-l-4 border-red-500 text-red-700 px-4 py-5 flex-auto';
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => $background]) }} role="alert">
    {!! $slot !!}
</div>