@props(['bg' => 'primary', 'type', 'size' => 'px-6 py-3 text-sm'])

@php
    switch ($bg) {
        default:
            $background = $bg;
            break;

        case 'primary':
            $background = 'bg-blue-500 text-white active:bg-blue-800';
            break;

        case 'info':
            $background = 'bg-teal-500 text-white active:bg-teal-800';
            break;

        case 'success':
            $background = 'bg-green-500 text-white active:bg-green-800';
            break;

        case 'warning':
            $background = 'bg-yellow-500 text-white active:bg-yellow-800';
            break;

        case 'danger':
            $background = 'bg-red-500 text-white active:bg-red-800';
            break;

        case 'secondary':
            $background = 'bg-gray-500 text-white active:bg-gray-800';
            break;
    }

    switch ($size) {
        default:
            $btnSize = $size;
            break;

        case 'lg':
            $btnSize = 'px-8 py-4';
            break;

        case 'sm':
            $btnSize = 'px-4 py-2 text-xs';
            break;
    }
@endphp
<button
    type="{{ $type ?? 'submit' }}"
    class="{{ $background }} {{ $btnSize }} font-bold uppercase rounded shadow hover:shadow-lg outline-none focus:outline-none"
    style="transition: all .15s ease">
    {!! $slot !!}
</button>
