<div {{ $attributes->merge(['class' => 'rounded-b mb-0 px-4 py-3 border-1 border-t border-solid border-gray-200 bg-white']) }}>
    <div class="flex flex-wrap items-center">
        <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-gray-800">
                {{ $slot }}
            </h3>
        </div>
    </div>
</div>
