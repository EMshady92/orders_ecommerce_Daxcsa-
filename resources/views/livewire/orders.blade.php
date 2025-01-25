<div class="w-full flex justify-center">
    <div  class="container py-12">
        <div class="flex mb-6">
            <button class="text-lg px-4 py-2 font-semibold rounded-sm {{$type==1 ? 'bg-orange-500 text-white' : ''}}" wire:click="updateType(1)">My Purchaces</button>
            <button class="text-lg px-4 py-2 font-semibold rounded-sm {{$type==2 ? 'bg-orange-500 text-white' : ''}}" wire:click="updateType(2)">My Sales</button>
        </div>
        {{-- web --}}
        <section class="md:grid grid-cols-6 gap-6 text-white hidden">
            <button wire:click="updateStatus()" class="bg-blue-500 bg-opacity-75 rounded-lg pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{ $todos }}
                </p>
                <p class="uppercase text-center">All</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-business-time"></i>
                </p>
            </button>

            <button wire:click="updateStatus(2)" class="bg-gray-500 bg-opacity-75 rounded-lg pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{ $solicitudes }}
                </p>
                <p class="uppercase text-center">REQUESTS</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-plus-circle"></i>
                </p>
            </button>

            <button wire:click="updateStatus(3)" class="bg-yellow-500 bg-opacity-75 rounded-lg pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{ $pagados }}
                </p>
                <p class="uppercase text-center">PAID</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-credit-card"></i>
                </p>
            </button>

            <button wire:click="updateStatus(6)" class="bg-orange-500 bg-opacity-75 rounded-lg pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{ $camino }}
                </p>
                <p class="uppercase text-center">ON THE WAY</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-truck"></i>
                </p>
            </button>

            <button wire:click="updateStatus(4)" class="bg-green-500 bg-opacity-75 rounded-lg pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{ $entregados }}
                </p>
                <p class="uppercase text-center">DELIVERED</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-check-circle"></i>
                </p>
            </button>

            <button wire:click="updateStatus(5)" class=" bg-red-500 bg-opacity-75 rounded-lg pt-8 pb-4">
                <p class="text-center text-2xl">
                    {{ $cancelados }}
                </p>
                <p class="uppercase text-center">CANDELLED</p>
                <p class="text-center text-2xl mt-2">
                    <i class="fas fa-times-circle"></i>
                </p>
            </button>
        </section>
        {{-- movil --}}
        <section class="md:hidden">
            <span class="text-xl font-semibold">SHOW: </span>
            <select name="" id="" class="form-control">
                <option value="">All</option>
                <option value="2">REQUESTS</option>
                <option value="3">PAID</option>
                <option value="6">ON THE WAY</option>
                <option value="4">DELIVERED</option>
                <option value="5">CANDELLED</option>
            </select>
        </section>

        @if ($orders->count())

        <section class="bg-white shadow-lg rounded-lg px-2 md:px-12 py-8 mt-12 text-gray-700">
            <h1 class="text-2xl mb-4">Recent Orders</h1>

            <ul>
                @foreach ($orders as $order)
                    <li class="flex items-center py-2 md:px-4">
                        <div x-data="{ open: false }" class="flex flex-1 items-center py-2 md:px-4 hover:bg-gray-100">
                            <a @click="open = true" class="flex flex-1 items-center py-2 md:px-4 hover:bg-gray-100 cursor-pointer">
                                <span class="w-12 text-center mx-2">
                                    @switch($order->status)
                                        @case(1)
                                            <i class="fas fa-business-time text-red-500 opacity-50 text-xl"></i>
                                        @break
                                        @case(2)
                                            <i class="far fa-bell text-gray-500 opacity-50 text-xl"></i>
                                        @break
                                        @case(3)
                                            <i class="fas fa-credit-card text-yellow-500 opacity-50 text-xl"></i>
                                        @break
                                        @case(4)
                                            <i class="fas fa-check-circle text-green-500 opacity-50 text-xl"></i>
                                        @break
                                        @case(5)
                                            <i class="fas fa-times-circle text-red-500 opacity-50 text-xl"></i>
                                        @break
                                        @case(6)
                                            <i class="fas fa-truck text-orange-500 opacity-50 text-xl"></i>
                                        @break
                                        @default
                                    @endswitch
                                </span>
                                <span>
                                    <img class="h-15 w-20 object-cover mr-4" src="{{ asset($order->img_url ? $order->img_url : 'images/image-not-found.png') }}"  alt="">
                                </span>
                                <span>
                                    Product: {{$order->name }}
                                    <br>
                                    {{ $order->created_at->format('d/m/Y') }}
                                </span>


                                <div class="ml-auto">
                                    <span class="font-bold">
                                        @switch($order->status)
                                            @case(1)

                                                Earring

                                            @break
                                            @case(2)

                                                Request

                                            @break
                                            @case(3)

                                                Paid

                                            @break
                                            @case(4)

                                                Devoted

                                            @break
                                            @case(5)

                                                Cancelled

                                            @break@case(5)

                                                 Cancelled

                                            @break
                                            @case(6)

                                                On the way

                                            @break
                                            @default

                                        @endswitch
                                    </span>

                                    <br>
                                    <span class="text-sm">
                                        {{ strtoupper($order->currency) }} $
                                        {{ number_format($order->total, 0, '.', ',') }}
                                    </span>
                                </div>

                                <span>
                                    <i class="fas fa-angle-right ml-6"></i>
                                </span>
                            </a>
                            @livewire('show',['order' => $order])

                        </div>
                    </li>
                @endforeach
            </ul>
        </section>

    @else
        <div class="bg-white shadow-lg rounded-lg px-12 py-8 mt-12 text-gray-700">
            <span class="font-bold text-lg">
                There are no order records.
            </span>
        </div>
    @endif

    </div>

</div>


