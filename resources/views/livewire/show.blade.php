<div x-show="open" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
    <div class="bg-white rounded-lg p-8 2xl:w-[50%] xl:w-[60%]  overflow-y-auto">
            <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 py-12">
                @if ($order->status != 5)
                    <div class="bg-white rounded-lg shadow-lg px-12 py-8 mb-6 flex items-center">
                        <div class="relative">
                            <div
                                class="{{ $order->status >= 2 && $order->status != 5 ? 'bg-blue-400' : 'bg-gray-400' }}  rounded-full h-12 w-12 flex items-center justify-center">
                                <i class="fas fa-check text-white"></i>
                            </div>

                            <div class="absolute -left-1.5 mt-0.5">
                                <p>Requested</p>
                            </div>
                        </div>

                        <div
                            class="{{ $order->status >= 3 && $order->status != 5 ? 'bg-blue-400' : 'bg-gray-400' }} h-1 flex-1 mx-2">
                        </div>

                        <div class="relative">
                            <div
                                class="{{ $order->status >= 3 && $order->status != 5 ? 'bg-blue-400' : 'bg-gray-400' }} rounded-full h-12 w-12 flex items-center justify-center">
                                <i class="fas fa-truck text-white"></i>
                            </div>

                            <div class="absolute -left-1 mt-0.5">
                                <p>Paid</p>
                            </div>
                        </div>

                        <div
                            class="{{ $order->status >= 4 && $order->status != 5 ? 'bg-blue-400' : 'bg-gray-400' }} h-1 flex-1 mx-2">
                        </div>

                        <div class="relative">
                            <div
                                class="{{ $order->status == 6 || $order->status == 4 ? 'bg-blue-400' : 'bg-gray-400' }} rounded-full h-12 w-12 flex items-center justify-center">
                                <i class="fas fa-truck text-white"></i>
                            </div>

                            <div class="absolute -left-1 mt-0.5">
                                <p>Envoy</p>
                            </div>
                        </div>

                        <div class="{{ $order->status == 4 ? 'bg-blue-400' : 'bg-gray-400' }} h-1 flex-1 mx-2">
                        </div>

                        <div class="relative">
                            <div
                                class="{{ $order->status ==4 ? 'bg-blue-400' : 'bg-gray-400' }} rounded-full h-12 w-12 flex items-center justify-center">
                                <i class="fas fa-check text-white"></i>
                            </div>

                            <div class="absolute -left-2 mt-0.5">
                                <p>Devoted</p>
                            </div>
                        </div>

                    </div>
                @else
                    <div class="bg-white rounded-lg shadow-lg px-12 py-8 mb-6 flex items-center">
                        <div class="relative flex">
                            <div class="bg-red-400 rounded-full h-12 w-12 flex items-center justify-center">
                                <i class="fas fa-times text-white"></i>
                            </div>

                            <div class="self-center">
                                <p class="ml-4 text-gray-700 font-semibold text-lg">Order Cancelled</p>
                                <p class="ml-4 text-gray-600 text-md">{{ $order->comments }}</p>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="bg-white rounded-lg shadow-lg px-6 py-4 mb-6 flex items-center">
                    <p class="text-gray-700 uppercase"><span class="font-semibold">Order:</span>
                        Order-{{ $order->id }}</p>

                    @if ($order->status == 1)

                        <button class="ml-auto">
                            Go to Checkout
                        </button>

                    @endif
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 text-gray-700 mb-6">
                    <div class="flex">
                        <p class="flex-1 text-xl font-semibold mb-4">Summary</p>
                    </div>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Unit</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td>
                                    <div class="flex">
                                        <img class="h-15 w-20 object-cover mr-4"
                                            src="{{ asset($order->img_url ? $order->img_url : 'images/image-not-found.png') }}"
                                            alt="">
                                        <article>
                                            <h1 class="font-bold">{{ $order->name }}</h1>
                                            <div class="flex text-xs">
                                                    Color: {{$order->color}} - {{ $order->unit }}

                                            </div>
                                            @if( $order->status >= 3 && $order->status != 5)
                                            <div class="flex justify-start">
                                                <div class="grid">
                                                    <h1 class="font-bold">Payment Method</h1>
                                                    <div class="flex">
                                                        <img  class="h-5 w-10 object-cover mr-4" src="https://th.bing.com/th/id/R.3a10b11d1fec8ba4c0a2ccf8077b6065?rik=GRLwnlo2X7osCA&riu=http%3a%2f%2fwww.carte-di-credito.org%2fimg%2f61e44de56c61bfd8104d558fc7659ec5%2f23.jpg&ehk=I2HZMBCm3al4U5UpLDptsJ9R1qgKW6d6%2bAc1ZD6x6g0%3d&risl=&pid=ImgRaw&r=0" alt="">
                                                       <h2 class="font-bold">**** 8156</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        </article>
                                    </div>
                                </td>

                                <td class="text-center">
                                    {{  $order->unit }}
                                </td>

                                <td class="text-center">
                                  {{ strtoupper($order->currency) }} $
                                  {{ number_format($order->total, 0, '.', ',') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <button @click="open = false" class="bg-red-500 text-white px-4 py-2 rounded">Close</button>
    </div>
</div>
