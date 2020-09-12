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
                            class="text-{{ request()->is('xui-docs') ? 'pink-500' : 'gray-700' }} hover:text-{{ request()->is('xui-docs') ? 'pink-600' : 'gray-900' }} text-xs mb-4 font-semibold"
                            href="{{ URL::route('xui::index') }}">
                            <svg class="h-4 w-4 mr-2 -mt-1 {{ request()->is('xui-docs') ? 'pink-500' : 'gray-700' }} inline-block" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                            Intro
                        </a>
                    </li>
                    <li class="inline-flex">
                        <a
                            class="text-{{ request()->is('xui-docs/colors') ? 'pink-500' : 'gray-700' }} hover:text-{{ request()->is('xui-docs/colors') ? 'pink-600' : 'gray-900' }} text-xs mb-4 font-semibold"
                            href="{{ URL::route('xui::colors') }}">
                            <svg class="h-4 w-4 mr-2 -mt-1 {{ request()->is('xui-docs/colors') ? 'pink-500' : 'gray-700' }} inline-block"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />  <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />  <circle cx="12" cy="7.5" r=".5" fill="currentColor" />  <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" /></svg>
                            Colors
                        </a>
                    </li>
                    <li class="inline-flex">
                        <a
                            class="text-{{ request()->is('xui-docs/grids') ? 'pink-500' : 'gray-700' }} hover:text-{{ request()->is('xui-docs/grids') ? 'pink-600' : 'gray-900' }} text-xs mb-4 font-semibold"
                            href="{{ URL::route('xui::grids') }}">
                            <svg class="h-4 w-4 mr-2 -mt-1 {{ request()->is('xui-docs/grids') ? 'pink-500' : 'gray-700' }} inline-block"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                            </svg>

                            Grids
                        </a>
                    </li>
                    <li class="inline-flex">
                        <a
                            class="text-{{ request()->is('xui-docs/cards') ? 'pink-500' : 'gray-700' }} hover:text-{{ request()->is('xui-docs/cards') ? 'pink-600' : 'gray-900' }} text-xs mb-4 font-semibold"
                            href="{{ URL::route('xui::cards') }}">
                            <svg class="h-4 w-4 mr-2 -mt-1 {{ request()->is('xui-docs/cards') ? 'pink-500' : 'gray-700' }} inline-block"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="1" y="4" width="22" height="16" rx="2" ry="2" />  <line x1="1" y1="10" x2="23" y2="10" /></svg>
                            Cards
                        </a>
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