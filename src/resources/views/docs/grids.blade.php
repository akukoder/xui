@extends('xui::docs.layout')

@section('content')
    <x-xui::container class="mb-10">
        <x-xui::row>
            <x-xui::col>
                <h1 class="text-4xl font-bold pt-2 pb-5 text-gray-500">
                    Grids
                </h1>
            </x-xui::col>
        </x-xui::row>

        <x-xui::card class="mb-10">
            <x-xui::card.header>Grids</x-xui::card.header>
            <x-xui::card.body>
                <x-xui::row class="gap-3 my-5" grid="2">
                    @foreach (range(1, 2) as $count)
                        <x-xui::col class="text-center bg-gray-300 p-5">
                            Col
                        </x-xui::col>
                    @endforeach
                </x-xui::row>

                <x-xui::row class="gap-3 my-5" grid="3">
                    @foreach (range(1, 3) as $count)
                        <x-xui::col class="text-center bg-gray-300 p-5">
                            Col
                        </x-xui::col>
                    @endforeach
                </x-xui::row>

                <x-xui::row class="gap-3 my-5" grid="4">
                    @foreach (range(1, 4) as $count)
                        <x-xui::col class="text-center bg-gray-400 p-5">
                            Col
                        </x-xui::col>
                    @endforeach
                </x-xui::row>

                <x-xui::row class="gap-3 my-5" grid="6">
                    @foreach (range(1, 6) as $count)
                        <x-xui::col class="text-center bg-gray-500 text-white p-5">
                            Col
                        </x-xui::col>
                    @endforeach
                </x-xui::row>

                <x-xui::row class="gap-3 my-5" grid="12">
                    @foreach (range(1, 12) as $count)
                        <x-xui::col class="text-center bg-gray-600 text-white p-5">
                            Col
                        </x-xui::col>
                    @endforeach
                </x-xui::row>

                <x-xui::row class="gap-3 my-5" grid="6">
                    <x-xui::col start="2" size="4" class="text-center bg-gray-600 text-white p-5">
                        <code class="text-sm">
                            &lt;x-xui::col start="2" size="4"&gt;...&lt;/x-xui::col&gt;
                        </code>
                    </x-xui::col>

                    <x-xui::col start="3" size="4" class="text-center bg-gray-600 text-white p-5">
                        <code class="text-sm">
                            &lt;x-xui::col start="3" size="4"&gt;...&lt;/x-xui::col&gt;
                        </code>
                    </x-xui::col>

                    <x-xui::col start="1" size="2" class="text-center bg-gray-600 text-white p-5">
                        <code class="text-sm">
                            &lt;x-xui::col start="1" size="2"&gt;...&lt;/x-xui::col&gt;
                        </code>
                    </x-xui::col>

                    <x-xui::col start="5" size="2" class="text-center bg-gray-600 text-white p-5">
                        <code class="text-sm">
                            &lt;x-xui::col start="5" size="2"&gt;...&lt;/x-xui::col&gt;
                        </code>
                    </x-xui::col>

                    <x-xui::col size="3" class="text-center bg-gray-600 text-white p-5">
                        <code class="text-sm">
                            &lt;x-xui::col size="3"&gt;...&lt;/x-xui::col&gt;
                        </code>
                    </x-xui::col>

                    <x-xui::col size="3" class="text-center bg-gray-600 text-white p-5">
                        <code class="text-sm">
                            &lt;x-xui::col size="3"&gt;...&lt;/x-xui::col&gt;
                        </code>
                    </x-xui::col>

                </x-xui::row>
            </x-xui::card.body>
        </x-xui::card>
    </x-xui::container>
@endsection