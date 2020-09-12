@props(['type' => '', 'class' => 'relative flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg mb-3 shadow'])

@php
    switch ($type) {
        default:
            $background = ' bg-white';
            break;

        case 'primary':
            $background = ' bg-blue-200';
            break;

        case 'info':
            $background = ' bg-teal-200';
            break;

        case 'success':
            $background = ' bg-green-200';
            break;

        case 'warning':
            $background = ' bg-orange-200';
            break;

        case 'danger':
            $background = ' bg-red-200';
            break;
    }

    $defaultClass = '';
@endphp

<nav class="{{ $class.$background }}">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        {!! $slot !!}
    </div>
</nav>