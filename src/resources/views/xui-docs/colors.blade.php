@extends('xui::xui-docs.layout')

@section('content')
    <x-xui::container class="mb-10">
        <x-xui::row>
            <x-xui::col>
                <h1 class="text-4xl font-bold pt-2 pb-5 text-gray-500">
                    Colors
                </h1>
            </x-xui::col>
        </x-xui::row>

        <x-xui::row>
            <x-xui::col>
                <x-xui::card class="mb-10">
                    <x-xui::card.header>Default Colors</x-xui::card.header>
                    <x-xui::card.body>
                        <x-xui::row class="gap-3 my-5" grid="3">
                        @foreach (['gray', 'blue', 'teal', 'red', 'orange', 'green', 'indigo', 'purple', 'pink'] as $color)

                                <x-xui::col>
                                    @foreach ([100, 200, 300, 400, 500, 600, 700, 800, 900] as $value)
                                        <div class="mx-1">
                                            @php
                                                $textColor = ($value < 400) ? '' : 'text-white';
                                            @endphp
                                            <div class="w-full py-4 px-10 mb-1 block font-bold {{ $textColor }} bg-{{ $color }}-{{ $value }} rounded text-center">
                                                bg-{{ $color }}-{{ $value }}
                                            </div>
                                        </div>
                                    @endforeach
                                </x-xui::col>

                        @endforeach
                        </x-xui::row>
                    </x-xui::card.body>
                </x-xui::card>

            </x-xui::col>
        </x-xui::row>
    </x-xui::container>
@endsection