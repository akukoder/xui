@extends('xui::xui-docs.layout')

@section('content')
    <x-xui::container class="mb-10">
        <x-xui::row grid="2">
            <x-xui::col class="mx-2 my-2">
                <h1 class="text-4xl font-bold pt-2 pb-5 text-gray-500">
                    Cards
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
                        Basic card component with default styling.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">
                    <x-xui::card>
                        <x-xui::card.header>
                            Header
                        </x-xui::card.header>
                        <x-xui::card.body>
                            Content
                        </x-xui::card.body>
                        <x-xui::card.footer class="text-right">
                            Footer
                        </x-xui::card.footer>
                    </x-xui::card>
                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-600">
&lt;x-xui::card&gt;
    &lt;x-xui::card.header&gt;
        <span class="text-gray-500">Header</span>
    &lt;/x-xui::card.header&gt;

    &lt;x-xui::card.body&gt;
        <span class="text-gray-500">Content</span>
    &lt;/x-xui::card.body&gt;

    &lt;x-xui::card.footer&gt;
        <span class="text-gray-500">Footer</span>
    &lt;/x-xui::card.footer&gt;
&lt;/x-xui::card&gt;
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
                        Card component with primary header color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">
                    <x-xui::card>
                        <x-xui::card.header type="primary">
                            Header Primary
                        </x-xui::card.header>
                        <x-xui::card.body>
                            Content
                        </x-xui::card.body>
                        <x-xui::card.footer class="text-right">
                            Footer
                        </x-xui::card.footer>
                    </x-xui::card>
                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::card&gt;
    &lt;x-xui::card.header <span class="text-red-600">type="primary"</span>&gt;
        <span class="text-gray-500">Header</span>
    &lt;/x-xui::card.header&gt;

    &lt;x-xui::card.body&gt;
        <span class="text-gray-500">Content</span>
    &lt;/x-xui::card.body&gt;

    &lt;x-xui::card.footer&gt;
        <span class="text-gray-500">Footer</span>
    &lt;/x-xui::card.footer&gt;
&lt;/x-xui::card&gt;
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
                        Card component with info header color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">
                    <x-xui::card>
                        <x-xui::card.header type="info">
                            Header Info
                        </x-xui::card.header>
                        <x-xui::card.body>
                            Content
                        </x-xui::card.body>
                        <x-xui::card.footer class="text-right">
                            Footer
                        </x-xui::card.footer>
                    </x-xui::card>
                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::card&gt;
    &lt;x-xui::card.header <span class="text-red-600">type="info"</span>&gt;
        <span class="text-gray-500">Header</span>
    &lt;/x-xui::card.header&gt;

    &lt;x-xui::card.body&gt;
        <span class="text-gray-500">Content</span>
    &lt;/x-xui::card.body&gt;

    &lt;x-xui::card.footer&gt;
        <span class="text-gray-500">Footer</span>
    &lt;/x-xui::card.footer&gt;
&lt;/x-xui::card&gt;
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
                        Card component with success header color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">
                    <x-xui::card>
                        <x-xui::card.header type="success">
                            Header Success
                        </x-xui::card.header>
                        <x-xui::card.body>
                            Content
                        </x-xui::card.body>
                        <x-xui::card.footer class="text-right">
                            Footer
                        </x-xui::card.footer>
                    </x-xui::card>
                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::card&gt;
    &lt;x-xui::card.header <span class="text-red-600">type="success"</span>&gt;
        <span class="text-gray-500">Header</span>
    &lt;/x-xui::card.header&gt;

    &lt;x-xui::card.body&gt;
        <span class="text-gray-500">Content</span>
    &lt;/x-xui::card.body&gt;

    &lt;x-xui::card.footer&gt;
        <span class="text-gray-500">Footer</span>
    &lt;/x-xui::card.footer&gt;
&lt;/x-xui::card&gt;
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
                        Card component with warning header color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">
                    <x-xui::card>
                        <x-xui::card.header type="warning">
                            Header Warning
                        </x-xui::card.header>
                        <x-xui::card.body>
                            Content
                        </x-xui::card.body>
                        <x-xui::card.footer class="text-right">
                            Footer
                        </x-xui::card.footer>
                    </x-xui::card>
                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::card&gt;
    &lt;x-xui::card.header <span class="text-red-600">type="warning"</span>&gt;
        <span class="text-gray-500">Header</span>
    &lt;/x-xui::card.header&gt;

    &lt;x-xui::card.body&gt;
        <span class="text-gray-500">Content</span>
    &lt;/x-xui::card.body&gt;

    &lt;x-xui::card.footer&gt;
        <span class="text-gray-500">Footer</span>
    &lt;/x-xui::card.footer&gt;
&lt;/x-xui::card&gt;
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
                        Card component with danger header color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">
                    <x-xui::card>
                        <x-xui::card.header type="danger">
                            Header Danger
                        </x-xui::card.header>
                        <x-xui::card.body>
                            Content
                        </x-xui::card.body>
                        <x-xui::card.footer class="text-right">
                            Footer
                        </x-xui::card.footer>
                    </x-xui::card>
                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::card&gt;
    &lt;x-xui::card.header <span class="text-red-600">type="danger"</span>&gt;
        <span class="text-gray-500">Header</span>
    &lt;/x-xui::card.header&gt;

    &lt;x-xui::card.body&gt;
        <span class="text-gray-500">Content</span>
    &lt;/x-xui::card.body&gt;

    &lt;x-xui::card.footer&gt;
        <span class="text-gray-500">Footer</span>
    &lt;/x-xui::card.footer&gt;
&lt;/x-xui::card&gt;
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
                        Just add class to the card element to change the styling. Do take note that the header and footer
                        have their own background color.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">
                    <x-xui::card class="bg-orange-200">
                        <x-xui::card.header>
                            Header
                        </x-xui::card.header>
                        <x-xui::card.body>
                            Content
                        </x-xui::card.body>
                        <x-xui::card.footer>
                            Footer
                        </x-xui::card.footer>
                    </x-xui::card>
                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::card <span class="text-red-600">class="bg-orange-200"</span>&gt;
    &lt;x-xui::card.header&gt;
        <span class="text-gray-500">Header</span>
    &lt;/x-xui::card.header&gt;

    &lt;x-xui::card.body&gt;
        <span class="text-gray-500">Content</span>
    &lt;/x-xui::card.body&gt;

    &lt;x-xui::card.footer&gt;
        <span class="text-gray-500">Footer</span>
    &lt;/x-xui::card.footer&gt;
&lt;/x-xui::card&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <!-- Custom -->
    <div class="bg-gray-200">
        <x-xui::container class="py-10">
            <x-xui::row>
                <x-xui::col class="px-2 mb-5">
                    <p class="text-md text-gray-700">
                        If you want more control, just define your preferred class for each elements.
                    </p>
                </x-xui::col>
            </x-xui::row>
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">
                    <x-xui::card>
                        <x-xui::card.header class="bg-pink-400">
                            Header
                        </x-xui::card.header>
                        <x-xui::card.body class="bg-purple-200">
                            Content
                        </x-xui::card.body>
                        <x-xui::card.footer class="bg-orange-400">
                            Footer
                        </x-xui::card.footer>
                    </x-xui::card>
                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-300">
&lt;x-xui::card&gt;
    &lt;x-xui::card.header <span class="text-red-600">class="bg-pink-400"</span>&gt;
        <span class="text-gray-500">Header</span>
    &lt;/x-xui::card.header&gt;

    &lt;x-xui::card.body <span class="text-red-600">class="bg-purple-200"</span>&gt;
        <span class="text-gray-500">Content</span>
    &lt;/x-xui::card.body&gt;

    &lt;x-xui::card.footer <span class="text-red-600">class="bg-orange-400"</span>&gt;
        <span class="text-gray-500">Footer</span>
    &lt;/x-xui::card.footer&gt;
&lt;/x-xui::card&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>


    <div class="bg-gray-100">
        <x-xui::container class="py-10">
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">
                    <x-xui::card>
                        <x-xui::card.header>
                            Header
                        </x-xui::card.header>
                        <x-xui::card.body>
                            Content
                        </x-xui::card.body>
                        <x-xui::card.footer class="text-right">
                            Footer
                        </x-xui::card.footer>
                    </x-xui::card>
                </x-xui::col>

                <x-xui::col class="mx-2 my-2 ml-10">
                    <x-xui::card class="shadow-md">
                        <x-xui::card.header>
                            Code Sample
                        </x-xui::card.header>
                        <x-xui::card.body class="px-12">
<pre class="text-sm text-red-600">
&lt;x-xui::card&gt;
    &lt;x-xui::card.header&gt;
        <span class="text-gray-500">Header</span>
    &lt;/x-xui::card.header&gt;

    &lt;x-xui::card.body&gt;
        <span class="text-gray-500">Content</span>
    &lt;/x-xui::card.body&gt;

    &lt;x-xui::card.footer&gt;
        <span class="text-gray-500">Footer</span>
    &lt;/x-xui::card.body&gt;
&lt;/x-xui::card&gt;
</pre>
                        </x-xui::card.body>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <div class="bg-gray-200">
        <x-xui::container class="py-10">
            <x-xui::row grid="2">
                <x-xui::col class="mx-2 my-2">
                    <x-xui::card>
                        <form action="#" method="post">
                            <x-xui::card.header type="primary">
                                Primary
                            </x-xui::card.header>
                            <x-xui::card.body>
                                Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magna.
                            </x-xui::card.body>
                            <x-xui::card.footer class="text-right">
                                <x-xui::button bg="info" size="sm">Submit</x-xui::button>
                            </x-xui::card.footer>
                        </form>
                    </x-xui::card>
                </x-xui::col>
            </x-xui::row>
        </x-xui::container>
    </div>

    <x-xui::row grid="2">
        <x-xui::col class="mx-2 my-2">
            <x-xui::card>
                <form action="#" method="post">
                    <x-xui::card.header type="info">
                        Info
                    </x-xui::card.header>
                    <x-xui::card.body>
                        Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magna.
                    </x-xui::card.body>
                    <x-xui::card.footer class="text-right">
                        <x-xui::button bg="info" size="sm">Submit</x-xui::button>
                    </x-xui::card.footer>
                </form>
            </x-xui::card>
        </x-xui::col>

        <x-xui::col class="mx-2 my-2">
            <x-xui::card>
                <form action="#" method="post">
                    <x-xui::card.header type="success">
                        Success
                    </x-xui::card.header>
                    <x-xui::card.body>
                        Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magna.
                    </x-xui::card.body>
                    <x-xui::card.footer class="text-right">
                        <x-xui::button bg="info" size="sm">Submit</x-xui::button>
                    </x-xui::card.footer>
                </form>
            </x-xui::card>
        </x-xui::col>
    </x-xui::row>

    <x-xui::row grid="2">
        <x-xui::col class="mx-2 my-2">
            <x-xui::card>
                <form action="#" method="post">
                    <x-xui::card.header type="warning">
                        Warning
                    </x-xui::card.header>
                    <x-xui::card.body>
                        Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magna.
                    </x-xui::card.body>
                    <x-xui::card.footer class="text-right">
                        <x-xui::button bg="info" size="sm">Submit</x-xui::button>
                    </x-xui::card.footer>
                </form>
            </x-xui::card>
        </x-xui::col>

        <x-xui::col class="mx-2 my-2">
            <x-xui::card>
                <form action="#" method="post">
                    <x-xui::card.header type="danger">
                        Danger
                    </x-xui::card.header>
                    <x-xui::card.body>
                        Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magna.
                    </x-xui::card.body>
                    <x-xui::card.footer class="text-right">
                        <x-xui::button bg="info" size="sm">Submit</x-xui::button>
                    </x-xui::card.footer>
                </form>
            </x-xui::card>
        </x-xui::col>
    </x-xui::row>

@endsection