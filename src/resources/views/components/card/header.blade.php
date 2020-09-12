@props([
    'type' => 'default',
])

@php
    switch ($type) {
        default:
            $bg = $type;
            $text = 'text-gray-800';
            break;

        case 'default':
        case 'white':
            $bg = 'bg-white';
            $text = 'text-gray-800';
            break;

        case 'primary':
        case 'blue':
            $bg = 'bg-blue-500';
            $text = 'text-white';
            break;

        case 'info':
            $bg = 'bg-teal-500';
            $text = 'text-white';
            break;

        case 'success':
            $bg = 'bg-green-500';
            $text = 'text-white';
            break;

        case 'warning':
            $bg = 'bg-yellow-500';
            $text = 'text-white';
            break;

        case 'danger':
            $bg = 'bg-red-500';
            $text = 'text-white';
            break;

    }
@endphp

<div {{ $attributes->merge(['class' => 'rounded-t mb-0 px-4 py-3 border-1 border-b border-solid border-gray-200 ' . $bg]) }}>
    <div class="flex flex-wrap items-center">
        <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base {{ $text }}">
                {{ $slot }}
            </h3>
        </div>
    </div>
</div>
