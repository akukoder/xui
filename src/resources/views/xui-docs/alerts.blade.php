@extends('xui::xui-docs.layout')

@section('content')
    <x-xui::container class="mb-10">
        <x-xui::row grid="2">
            <x-xui::col class="mx-2 my-2">
                <h1 class="text-4xl font-bold pt-2 pb-5 text-gray-500">
                    Alerts
                </h1>
            </x-xui::col>
        </x-xui::row>
    </x-xui::container>

    <!-- Default -->
    <div class="bg-gray-100">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        Basic alert component with default styling.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">

                    <x-xui::alert>
                        Default alert styling
                    </x-xui::alert>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-600">
&lt;x-xui::alert&gt;
    Default alert styling
&lt;/x-xui::alert&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <!-- Primary -->
    <div class="bg-gray-200">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        Alert with primary color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">

                    <x-xui::alert type="primary">
                        Primary alert styling
                    </x-xui::alert>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::alert <span class="text-red-600">type="primary"</span>&gt;
    Primary alert styling
&lt;/x-xui::alert&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <!-- Info -->
    <div class="bg-gray-100">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        Alert with info color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">

                    <x-xui::alert type="info">
                        Info alert styling
                    </x-xui::alert>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::alert <span class="text-red-600">type="info"</span>&gt;
    Info alert styling
&lt;/x-xui::alert&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <!-- Success -->
    <div class="bg-gray-200">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        Alert with success color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">

                    <x-xui::alert type="success">
                        Success alert styling
                    </x-xui::alert>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::alert <span class="text-red-600">type="success"</span>&gt;
    Success alert styling
&lt;/x-xui::alert&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <!-- Warning -->
    <div class="bg-gray-100">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        Alert with warning color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">

                    <x-xui::alert type="warning">
                        Warning alert styling
                    </x-xui::alert>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::alert <span class="text-red-600">type="warning"</span>&gt;
    Warning alert styling
&lt;/x-xui::alert&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <!-- Danger -->
    <div class="bg-gray-200">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        Alert with danger color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">

                    <x-xui::alert type="danger">
                        Danger alert styling
                    </x-xui::alert>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::alert <span class="text-red-600">type="danger"</span>&gt;
    Danger alert styling
&lt;/x-xui::alert&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <!-- Custom -->
    <div class="bg-gray-100">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        Alert with custom styling and HTML content.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">

                    <x-xui::alert class="bg-purple-200 shadow border-0 border-l-4 border-purple-500 text-purple-700 px-4 py-5 flex-auto text-center">
                        <svg class="h-8 w-8 text-purple-700 inline-block mr-1 -mt-1 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>

                        <p>Custom styling with HTML content.</p>
                    </x-xui::alert>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12 overflow-auto">
<pre class="text-sm text-red-300">
&lt;x-xui::alert <span class="text-sm text-red-600">class="bg-purple-200 shadow border-0 border-l-4 border-purple-500 text-purple-700 px-4 py-5 flex-auto text-center"</span>&gt;
    <span class="text-sm text-red-600">&lt;svg class="h-8 w-8 text-purple-700 inline-block mr-1 -mt-1 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"&gt;
        &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/&gt;
    &lt;/svg&gt;

    &lt;p&gt;Custom styling with HTML content.&lt;/p&gt;</span>
&lt;/x-xui::alert&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

@endsection