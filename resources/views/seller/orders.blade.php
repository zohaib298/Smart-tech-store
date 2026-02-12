<x-layout>
<x-nav_user />

<div class="flex">
<x-sidebar/>

<div class="bg-gray-100 w-full min-h-screen">
<div class="max-w-6xl mx-auto p-6">

<h1 class="text-3xl font-semibold mb-6">My Orders</h1>

@forelse($orders as $item)

<div class="bg-white rounded-2xl shadow p-6 mb-8">

    <!-- Order Header -->
    <div class="flex justify-between items-center mb-4">
        <div>
            <p class="text-sm text-gray-500">Order ID</p>
            <p class="text-lg font-semibold">#ORD-{{ $item->order->id ?? 'N/A' }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Order Date</p>
            <p class="font-medium">
                {{ optional($item->order->created_at)->format('d M Y') ?? 'N/A' }}
            </p>
        </div>

        <div>
            <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-sm">
                {{ $item->order->status ?? 'Pending' }}
            </span>
        </div>
    </div>

    <!-- Customer Info -->
    <div class="border-t pt-4 mb-6">
        <h2 class="text-lg font-semibold mb-2">Customer</h2>
        <p><strong>Name:</strong> {{ $item->order->user->name ?? 'N/A' }}</p>
        <p><strong>Email:</strong> {{ $item->order->user->email ?? 'N/A' }}</p>
    </div>

    <!-- Order Item (Single Product per row) -->
    <div class="overflow-x-auto">
        <table class="min-w-full text-left border">
            <thead class="bg-gray-50">
                <tr>
                    <th class="py-2 px-4">Product</th>
                    <th class="py-2 px-4">Price</th>
                    <th class="py-2 px-4">Qty</th>
                    <th class="py-2 px-4">Total</th>
                </tr>
            </thead>
            <tbody>
                @if($item->product)
                <tr class="border-t">
                    <td class="py-3 px-4 flex items-center gap-3">
                        <img src="{{ asset('storage/'.$item->image) }}" 
                             class="w-12 h-12 object-cover rounded">
                        {{ $item->product->product_name ?? $item->name }}
                    </td>
                    <td class="px-4">
                        {{ $item->price }}
                    </td>
                    <td class="px-4">
                        {{ $item->quantity }}
                    </td>
                    <td class="px-4 font-medium">
                        {{ $item->price * $item->quantity }}
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Total -->
    <div class="text-right mt-4">
        <p class="text-lg font-semibold">
            Order Total: {{ $item->order->total_price ?? 'N/A' }}
        </p>
    </div>

</div>

@empty
<p>No orders found.</p>
@endforelse

</div>
</div>
</div>

</x-layout>