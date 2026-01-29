<x-layout>
    <div class="container mx-auto py-10 px-5">

        <h1 class="text-2xl font-semibold mb-6">Your cart</h1>

        @if($cartItems->isEmpty())
            <p>Your cart is empty.</p>
        @else
            <x-flash />

            <!-- Wrap everything in a single form -->
            <form action="{{ route('checkout') }}" method="POST">
                @csrf

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b">
                                <th class="py-2 px-4">Product</th>
                                <th class="py-2 px-4">Quantity</th>
                                <th class="py-2 px-4">Total</th>
                                <th class="py-2 px-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
            @foreach($cartItems as $item)
<tr class="border-b">
    <td class="py-4 px-4 flex gap-4 items-center">
        <img src="{{ asset('storage/'.$item->product->product_image) }}" class="w-24">

        <div>
            <h3 class="font-semibold">
                {{ $item->product->product_name }}
            </h3>

            <p>Rs {{ $item->product->product_price }}</p>
            <p>Qty: {{ $item->quantity }}</p>
        </div>
    </td>

    <td class="py-4 px-4 text-center">
        {{ $item->quantity }}
    </td>

    <td class="py-4 px-4">
        Rs {{ $item->product->product_price * $item->quantity }}
    </td>
</tr>
@endforeach


                        </tbody>
                    </table>
                </div>

                <div class="mt-6 flex justify-end flex-col gap-2">
                    <button type="submit" class="px-6 py-3 bg-blue-800 text-white font-semibold rounded">Checkout</button>

                    <div class="text-right mt-4">
                       <p class="font-semibold">
    Estimated total:
    Rs {{ number_format($cartItems->sum(fn($i) => $i->product->product_price * $i->quantity), 2) }} PKR
</p>

                        <p class="text-gray-500 text-sm">Taxes, discounts and shipping calculated at checkout.</p>
                    </div>
                </div>

            </form>
        @endif
    </div>
</x-layout>
