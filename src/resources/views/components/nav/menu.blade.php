@props(['id' => 'xui-items'])

<div class="lg:flex flex-grow items-center" id="{{ $id }}">
    <ul class="flex flex-col lg:flex-row list-none ml-auto">
        {!! $slot !!}
    </ul>
</div>