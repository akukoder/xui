@extends('xui::docs.layout')

@section('content')
    <x-xui::container class="mb-10">
        <x-xui::row grid="2">
            <x-xui::col class="mx-2 my-2">
                <h1 class="text-4xl font-bold pt-2 pb-5 text-gray-500">
                    Cards
                </h1>
            </x-xui::col>
        </x-xui::row>

        <x-xui::card class="mb-10">
            <x-xui::card.header>Grids</x-xui::card.header>
            <x-xui::card.body>

                <x-xui::row grid="2">
                    <x-xui::col class="mx-2 my-2">
                        <x-xui::card>
                            <form action="#" method="post">
                                <x-xui::card.header type="">
                                    Default
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

            </x-xui::card.body>
        </x-xui::card>
    </x-xui::container>
@endsection