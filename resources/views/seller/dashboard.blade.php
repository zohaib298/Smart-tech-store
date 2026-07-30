<x-layout>
<x-nav_user />
<body class="bg-neutral-100 text-neutral-900">
<div class="flex gap-2">
<x-sidebar />
<div class="w-[80%] px-6 py-8">

    <h1 class="text-3xl font-semibold mb-1">Dashboard</h1>
    <p class="text-neutral-500 mb-8">Welcome back, {{ auth()->user()->name }}</p>

    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <p class="text-sm text-neutral-500">Total Products</p>
            <h2 class="text-4xl font-bold mt-1">{{ $totalProducts }}</h2>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <p class="text-sm text-neutral-500">Total Orders</p>
            <h2 class="text-4xl font-bold mt-1">{{ $totalOrders }}</h2>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6">
            <p class="text-sm text-neutral-500">Total Revenue</p>
            <h2 class="text-4xl font-bold mt-1">Rs. {{ number_format($totalRevenue) }}</h2>
        </div>
    </div>

    {{-- Low Stock Alert --}}
    @if($lowStock->count() > 0)
    <div class="bg-red-50 border border-red-200 rounded-2xl p-5 mb-8">
        <h3 class="font-semibold text-red-700 mb-3">⚠️ Low Stock Alert</h3>
        <div class="space-y-2">
            @foreach($lowStock as $item)
            <div class="flex justify-between text-sm">
                <span>{{ $item->product_name }}</span>
                <span class="text-red-600 font-medium">{{ $item->stock }} left</span>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    {{-- Recent Orders --}}
    <div class="bg-white rounded-2xl shadow-sm p-6">
        <h3 class="font-semibold text-lg mb-4">Recent Orders</h3>
        @if($recentOrders->count() > 0)
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left text-neutral-500 border-b">
                    <th class="pb-3">Customer</th>
                    <th class="pb-3">Product</th>
                    <th class="pb-3">Qty</th>
                    <th class="pb-3">Amount</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($recentOrders as $order)
                <tr>
                    <td class="py-3">{{ $order->order->user->name ?? 'N/A' }}</td>
                    <td class="py-3">{{ $order->name }}</td>
                    <td class="py-3">{{ $order->quantity }}</td>
                    <td class="py-3">Rs. {{ number_format($order->price * $order->quantity) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-neutral-400 text-sm">No orders yet.</p>
        @endif
    </div>

</div>
</div>
</body>
</x-layout>
