<aside class="w-52 lg:w-52 min-h-screen bg-gray-100 border-r">
  <div class="p-6 border-b">
    <h2 class="text-2xl font-semibold">{{ auth()->user()->name }}</h2>
    <p class="text-sm text-gray-500">Welcome back</p>
  </div>

  <nav class="p-4 space-y-2">
    <a href="/seller/admin" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white transition {{ request()->is('seller/admin') ? 'bg-white font-semibold' : '' }}">
      <span>🏠</span>
      <span class="font-medium">Dashboard</span>
    </a>

    <a href="/seller/orders" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white transition {{ request()->is('seller/orders') ? 'bg-white font-semibold' : '' }}">
      <span>📦</span>
      <span class="font-medium">Orders</span>
    </a>

    <a href="/seller/products" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white transition {{ request()->is('seller/products') ? 'bg-white font-semibold' : '' }}">
      <span>🛒</span>
      <span class="font-medium">My Products</span>
    </a>

    <a href="/seller/admin" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white transition {{ request()->is('seller/add-product') ? 'bg-white font-semibold' : '' }}">
      <span>➕</span>
      <span class="font-medium">Add Product</span>
    </a>
  </nav>

  <div class="mt-auto p-4 border-t">
    <form action="/logout" method="POST">
      @csrf
      <button class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-50 text-red-600 transition w-full">
        <span>🚪</span>
        <span class="font-medium">Logout</span>
      </button>
    </form>
  </div>
</aside>
