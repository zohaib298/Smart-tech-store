<x-layout>
<x-nav_user />
<body class="bg-neutral-100 text-neutral-900">
<div class="flex gap-2">
<x-sidebar />
<div class="w-[80%] px-6 py-8">

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-semibold">My Products</h1>
            <p class="text-neutral-500 mt-1">Manage your listed products</p>
        </div>
        <a href="/seller/admin" class="bg-neutral-900 text-white px-6 py-3 rounded-xl hover:bg-neutral-800">
            + Add Product
        </a>
    </div>

    @if(session('message'))
    <div class="bg-green-50 border border-green-200 text-green-700 rounded-xl px-5 py-3 mb-6">
        {{ session('message') }}
    </div>
    @endif

    @if($products->count() > 0)
    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left text-neutral-500 border-b bg-neutral-50">
                    <th class="px-6 py-4">Image</th>
                    <th class="px-6 py-4">Product</th>
                    <th class="px-6 py-4">Category</th>
                    <th class="px-6 py-4">Price</th>
                    <th class="px-6 py-4">Stock</th>
                    <th class="px-6 py-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($products as $product)
                <tr class="hover:bg-neutral-50">
                    <td class="px-6 py-4">
                        <img src="{{ asset('storage/' . $product->product_image) }}"
                             class="h-12 w-12 object-cover rounded-xl"
                             onerror="this.src='https://via.placeholder.com/48'">
                    </td>
                    <td class="px-6 py-4">
                        <p class="font-medium">{{ $product->product_name }}</p>
                        <p class="text-neutral-400 text-xs mt-1">{{ Str::limit($product->product_description, 40) }}</p>
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-neutral-100 px-3 py-1 rounded-full text-xs">{{ $product->category }}</span>
                    </td>
                    <td class="px-6 py-4 font-medium">Rs. {{ number_format($product->product_price) }}</td>
                    <td class="px-6 py-4">
                        @if($product->stock <= 5)
                            <span class="text-red-600 font-medium">{{ $product->stock }} ⚠️</span>
                        @else
                            <span>{{ $product->stock }}</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        <form action="/seller/products/{{ $product->id }}" method="POST"
                              onsubmit="return confirm('Delete this product?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:text-red-700 text-sm font-medium">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="bg-white rounded-2xl shadow-sm p-12 text-center">
        <p class="text-neutral-400 text-lg">No products yet</p>
        <a href="/seller/admin" class="mt-4 inline-block bg-neutral-900 text-white px-6 py-3 rounded-xl hover:bg-neutral-800">
            Add your first product
        </a>
    </div>
    @endif

</div>
</div>
</body>
</x-layout>
