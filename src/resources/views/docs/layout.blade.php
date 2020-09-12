<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.8/tailwind.min.css" />
    <title>XUI Docs</title>
</head>
<body class="text-gray-800 antialiased">
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root">
    <nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
        <div class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
            <button
                class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                type="button"
                onclick="toggleNavbar('example-collapse-sidebar')">
                <i class="fas fa-bars"></i>
            </button>
            <a
                class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                href="javascript:void(0)"
            >
                XUI Docs
            </a>

            <div
                class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
                id="example-collapse-sidebar">

                <h6 class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                    Documentation
                </h6>

                <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                    <li class="inline-flex">
                        <a
                            class="text-{{ request()->is('xui-docs') ? 'pink' : 'gray' }}-500 hover:text-{{ request()->is('xui-docs') ? 'pink' : 'gray' }}-600 text-xs mb-4 font-semibold"
                            href="{{ URL::route('xui::index') }}">
                            <i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                            Intro
                        </a>
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-{{ request()->is('xui-docs/colors') ? 'pink' : 'gray' }}-500 hover:text-{{ request()->is('xui-docs/colors') ? 'pink' : 'gray' }}-600 text-xs mb-4 font-semibold"
                                href="{{ URL::route('xui::colors') }}">
                            <i class="fas fa-paint-brush opacity-75 mr-2 text-sm"></i>
                            Colors
                        </a>
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-{{ request()->is('xui-docs/grids') ? 'pink' : 'gray' }}-500 hover:text-{{ request()->is('xui-docs/grids') ? 'pink' : 'gray' }}-600 text-xs mb-4 font-semibold"
                                href="{{ URL::route('xui::grids') }}">
                            <i class="fas fa-paint-brush opacity-75 mr-2 text-sm"></i>
                            Grids
                        </a>
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-{{ request()->is('xui-docs/cards') ? 'pink' : 'gray' }}-500 hover:text-{{ request()->is('xui-docs/cards') ? 'pink' : 'gray' }}-600 text-xs mb-4 font-semibold"
                                href="{{ URL::route('xui::cards') }}">
                            <i class="fas fa-paint-brush opacity-75 mr-2 text-sm"></i>
                            Cards
                        </a>
                    </li>

                    <li class="inline-flex">
                        <a
                            class="text-gray-800 hover:text-gray-600 text-sm block mb-4 no-underline font-semibold"
                            href="#/documentation/styles"
                        ><i
                                    class="fas fa-paint-brush mr-2 text-gray-500 text-base"
                            ></i>
                            Styles</a
                        >
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-gray-800 hover:text-gray-600 text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/alerts"
                        ><i class="fab fa-css3-alt mr-2 text-gray-500 text-base"></i>
                            CSS Components</a
                        >
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-gray-800 hover:text-gray-600 text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/vue/alerts"
                        ><i class="fab fa-vuejs mr-2 text-gray-500 text-base"></i>
                            VueJS</a
                        >
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-gray-800 hover:text-gray-600  text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/react/alerts"
                        ><i class="fab fa-react mr-2 text-gray-500 text-base"></i>
                            React</a
                        >
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-gray-800 hover:text-gray-600  text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/angular/alerts"
                        ><i class="fab fa-angular mr-2 text-gray-500 text-base"></i>
                            Angular</a
                        >
                    </li>
                    <li class="inline-flex">
                        <a
                                class="text-gray-800 hover:text-gray-600  text-sm block mb-4 no-underline font-semibold"
                                href="#/documentation/javascript/alerts"
                        ><i class="fab fa-js-square mr-2 text-gray-500 text-base"></i>
                            Javascript</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="relative md:ml-64 bg-gray-200 h-full">
        <div class="py-10">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>