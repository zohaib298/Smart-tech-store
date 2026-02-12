<aside class="w-52 lg:w-52 min-h-screen bg-gray-100 border-r">
  <div class="p-6 border-b">
    <h2 class="text-2xl font-semibold">{{ auth()->user()->name }}</h2>
    <p class="text-sm text-gray-500">Welcome back</p>
  </div>

  <nav class="p-4 space-y-2">
    <a href="/seller/admin" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-100 transition">
      <span>🏠</span>
      <span class="font-medium">Dashboard</span>
    </a>

    <a href="/orders" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-100 transition">
      <span>📦</span>
      <span class="font-medium">Orders</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-100 transition">
      <span>🛒</span>
      <span class="font-medium">Products</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-100 transition">
      <span>📊</span>
      <span class="font-medium">Analytics</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-100 transition">
      <span>💬</span>
      <span class="font-medium">Messages</span>
    </a>

    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-100 transition">
      <span>⚙️</span>
      <span class="font-medium">Settings</span>
    </a>
  </nav>

  <div class="mt-auto p-4 border-t">
    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-50 text-red-600 transition">
      <span>🚪</span>
      <span class="font-medium">Logout</span>
    </a>
  </div>
</aside>
