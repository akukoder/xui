@extends('xui::xui-docs.layout')

@section('content')
    <x-xui::container class="mb-10">
        <x-xui::row grid="2">
            <x-xui::col class="mx-2 my-2">
                <h1 class="text-4xl font-bold pt-2 pb-5 text-gray-500">
                    Navbar
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
                        Basic navbar component with default styling.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="1">
                <x-xui::col class="mx-2 my-2">

                    <x-xui::nav>
                        <x-xui::nav.brand href="https://github.com/akukoder/xui">
                            Navbar
                        </x-xui::nav.brand>
                    </x-xui::nav>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-600">
&lt;x-xui::nav&gt;
    &lt;x-xui::nav.brand href="https://github.com/akukoder/xui"&gt;
        Navbar
    &lt;/x-xui::nav.brand&gt;
&lt;/x-xui::nav&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <!-- Icon brand -->
    <div class="bg-gray-200">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        Navbar with icon as brand.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="1">
                <x-xui::col class="mx-2 my-2">

                    <x-xui::nav>
                        <x-xui::nav.brand href="https://github.com/akukoder/xui">
                            <svg class="h-4 w-4 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z" />
                                <path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z" />
                                <path d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z" />
                                <path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z" />
                                <path d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z" />
                                <path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z" />
                                <path d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z" />
                                <path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z" />
                            </svg>
                        </x-xui::nav.brand>
                    </x-xui::nav>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12 overflow-auto">
<pre class="text-sm text-red-300">
&lt;x-xui::nav&gt;
    &lt;x-xui::nav.brand href="https://github.com/akukoder/xui"&gt;
        <span class="text-sm text-red-600">&lt;svg class="h-4 w-4 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;
            &lt;path d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z" /&gt;
            &lt;path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z" /&gt;
            &lt;path d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z" /&gt;
            &lt;path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z" /&gt;
            &lt;path d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z" /&gt;
            &lt;path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z" /&gt;
            &lt;path d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z" /&gt;
            &lt;path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z" /&gt;
        &lt;/svg&gt;</span>
    &lt;/x-xui::nav.brand&gt;
&lt;/x-xui::nav&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <!-- Menu items -->
    <div class="bg-gray-100">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        Navbar with menu items.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="1">
                <x-xui::col class="mx-2 my-2">

                    <x-xui::nav>
                        <x-xui::nav.brand href="https://github.com/akukoder/xui">
                            XUI
                        </x-xui::nav.brand>

                        <x-xui::nav.menu>
                            <x-xui::nav.item href="index.html">
                                Home
                            </x-xui::nav.item>

                            <x-xui::nav.item href="services.html">
                                Services
                            </x-xui::nav.item>

                            <x-xui::nav.item href="about.html">
                                About Us
                            </x-xui::nav.item>

                            <x-xui::nav.item href="https://github.com/akukoder">
                                <svg class="h-4 w-4 text-red-gray-700 hover:opacity-75" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"/>
                                    <path d="M9 19c-4.286 1.35-4.286-2.55-6-3m12 5v-3.5c0-1 .099-1.405-.5-2 2.791-.3 5.5-1.366 5.5-6.04a4.567 4.567 0 0 0 -1.333 -3.21 4.192 4.192 0 00-.08-3.227s-1.05-.3-3.476 1.267a12.334 12.334 0 0 0 -6.222 0C6.462 2.723 5.413 3.023 5.413 3.023a4.192 4.192 0 0 0 -.08 3.227A4.566 4.566 0 004 9.486c0 4.64 2.709 5.68 5.5 6.014-.591.589-.56 1.183-.5 2V21" />
                                </svg>
                            </x-xui::nav.item>
                        </x-xui::nav.menu>
                    </x-xui::nav>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12 overflow-auto">
<pre class="text-sm text-red-300">
&lt;x-xui::nav&gt;
    &lt;x-xui::nav.brand href=&quot;https://github.com/akukoder/xui&quot;&gt;
        XUI
    &lt;/x-xui::nav.brand&gt;
    <span class="text-sm text-red-600">
    &lt;x-xui::nav.menu&gt;
        &lt;x-xui::nav.item href=&quot;index.html&quot;&gt;
            Home
        &lt;/x-xui::nav.item&gt;

        &lt;x-xui::nav.item href=&quot;services.html&quot;&gt;
            Services
        &lt;/x-xui::nav.item&gt;

        &lt;x-xui::nav.item href=&quot;about.html&quot;&gt;
            About Us
        &lt;/x-xui::nav.item&gt;

        &lt;x-xui::nav.item href=&quot;https://github.com/akukoder&quot;&gt;
            &lt;svg class=&quot;h-4 w-4 text-red-gray-700 hover:opacity-75&quot; width=&quot;24&quot; height=&quot;24&quot; viewBox=&quot;0 0 24 24&quot; stroke-width=&quot;2&quot; stroke=&quot;currentColor&quot; fill=&quot;none&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot;&gt;
                &lt;path stroke=&quot;none&quot; d=&quot;M0 0h24v24H0z&quot;/&gt;
                &lt;path d=&quot;M9 19c-4.286 1.35-4.286-2.55-6-3m12 5v-3.5c0-1 .099-1.405-.5-2 2.791-.3 5.5-1.366 5.5-6.04a4.567 4.567 0 0 0 -1.333 -3.21 4.192 4.192 0 00-.08-3.227s-1.05-.3-3.476 1.267a12.334 12.334 0 0 0 -6.222 0C6.462 2.723 5.413 3.023 5.413 3.023a4.192 4.192 0 0 0 -.08 3.227A4.566 4.566 0 004 9.486c0 4.64 2.709 5.68 5.5 6.014-.591.589-.56 1.183-.5 2V21&quot; /&gt;
            &lt;/svg&gt;
        &lt;/x-xui::nav.item&gt;
    &lt;/x-xui::nav.menu&gt;</span>
&lt;/x-xui::nav&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <!-- Custom class on menu items -->
    <div class="bg-gray-200">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        Custom styling for menu items.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="1">
                <x-xui::col class="mx-2 my-2">

                    <x-xui::nav>
                        <x-xui::nav.brand href="https://github.com/akukoder/xui">
                            XUI
                        </x-xui::nav.brand>

                        <x-xui::nav.menu>
                            <x-xui::nav.item
                                href="index.html"
                                class="border-solid border border-pink-400 hover:border-pink-600 text-pink-400 hover:text-pink-700 rounded hover:bg-pink-100 ml-1">
                                Home
                            </x-xui::nav.item>

                            <x-xui::nav.item
                                href="services.html"
                                class="border-solid border border-pink-400 hover:border-pink-600 text-pink-400 hover:text-pink-700 rounded hover:bg-pink-100 ml-1">
                                Services
                            </x-xui::nav.item>

                            <x-xui::nav.item
                                href="about.html"
                                class="border-solid border border-pink-400 hover:border-pink-600 text-pink-400 hover:text-pink-700 rounded hover:bg-pink-100 ml-1">
                                About Us
                            </x-xui::nav.item>
                        </x-xui::nav.menu>
                    </x-xui::nav>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12 overflow-auto">
<pre class="text-sm text-red-300">
&lt;x-xui::nav&gt;
    &lt;x-xui::nav.brand href=&quot;https://github.com/akukoder/xui&quot;&gt;
        XUI
    &lt;/x-xui::nav.brand&gt;

    &lt;x-xui::nav.menu&gt;
        &lt;x-xui::nav.item
            href=&quot;index.html&quot;
            <span class="text-sm text-red-600">class=&quot;border-solid border border-pink-400 hover:border-pink-600 text-pink-400 hover:text-pink-700 rounded hover:bg-pink-100 ml-1&quot;&gt;</span>
            Home
        &lt;/x-xui::nav.item&gt;

        &lt;x-xui::nav.item
            href=&quot;services.html&quot;
            <span class="text-sm text-red-600">class=&quot;border-solid border border-pink-400 hover:border-pink-600 text-pink-400 hover:text-pink-700 rounded hover:bg-pink-100 ml-1&quot;&gt;</span>
            Services
        &lt;/x-xui::nav.item&gt;

        &lt;x-xui::nav.item
            href=&quot;about.html&quot;
            <span class="text-sm text-red-600">class=&quot;border-solid border border-pink-400 hover:border-pink-600 text-pink-400 hover:text-pink-700 rounded hover:bg-pink-100 ml-1&quot;&gt;</span>
            About Us
        &lt;/x-xui::nav.item&gt;
    &lt;/x-xui::nav.menu&gt;
&lt;/x-xui::nav&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <!-- Custom color -->
    <div class="bg-gray-100">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        Navbar with additional background color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="1">
                <x-xui::col class="mx-2 my-2">

                    @foreach (['primary', 'info', 'success', 'warning', 'danger'] as $type)
                    <x-xui::nav type="{{ $type }}">
                        <x-xui::nav.brand href="https://github.com/akukoder/xui">
                            XUI
                        </x-xui::nav.brand>

                        <x-xui::nav.menu>
                            <x-xui::nav.item href="index.html">
                                Home
                            </x-xui::nav.item>

                            <x-xui::nav.item href="services.html">
                                Services
                            </x-xui::nav.item>

                            <x-xui::nav.item href="about.html">
                                About Us
                            </x-xui::nav.item>
                        </x-xui::nav.menu>
                    </x-xui::nav>
                    @endforeach

                    <x-xui::nav class="relative flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg mb-3 bg-orange-400 shadow-inner">
                        <x-xui::nav.brand href="https://github.com/akukoder/xui">
                            XUI
                        </x-xui::nav.brand>

                        <x-xui::nav.menu>
                            <x-xui::nav.item href="index.html">
                                Home
                            </x-xui::nav.item>

                            <x-xui::nav.item href="services.html">
                                Services
                            </x-xui::nav.item>

                            <x-xui::nav.item href="about.html">
                                About Us
                            </x-xui::nav.item>
                        </x-xui::nav.menu>
                    </x-xui::nav>

                </x-xui::col>

                <x-xui::col class="mx-2 my-2">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12 overflow-auto">
                            @foreach (['primary', 'info', 'success', 'warning', 'danger'] as $type)
<pre class="text-sm text-red-300">
&lt;x-xui::nav <span class="text-sm text-red-600">type=&quot;{{ $type }}&quot;</span>&gt;
    ...
&lt;/x-xui::nav&gt;

</pre>
                            @endforeach

<pre class="text-sm text-red-300">
&lt;x-xui::nav <span class="text-sm text-red-600">class="relative flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg mb-3 bg-orange-400 shadow-inner"</span>&gt;
    ...
&lt;/x-xui::nav&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

@endsection