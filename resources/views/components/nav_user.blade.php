<x-layout>
    <div class="flex p-5 justify-around items-center">
        <x-flash />
        <ul class="unstyled flex gap-5 items-center text-sm">
            <li>
                <a class="underline" href="#">Home</a>
            </li>
            <li>
                <a class="text-gray-700 hover:underline" href="#">Shop by Brand</a>
                <i class="bi bi-chevron-down"></i>
            </li>
            <li>
                <a class="text-gray-700 hover:underline" href="#">Contact</a>
            </li>
        </ul>
        
        <img src="https://smarttechstore.com/cdn/shop/files/Logo.png?v=1766078249&width=90" alt="" >
        <div class="flex items-center gap-5">
        <i class="bi bi-search text-xl"></i>
         @auth
             <h3>
              {{ auth()->user()->name }}
             </h3>
             <form action="/logout" method="POST">
              @csrf
              <button class="text-red-500">Logout</button>
            </form>
           @endauth
           @guest
             <a href="/signup">
             <i class="bi bi-person text-2xl"></i>
        </a>
           @endguest
        
       



      @auth
    @php
        $cartCount = \App\Models\cart::where('user_id', Auth::id())->sum('quantity');
    @endphp
    <a href="/shop" class="relative">
        <i class="bi bi-bag text-xl"></i>
        <span id="cart-count" 
              class="absolute -top-2 -right-2 bg-red-600 text-white text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
            {{ $cartCount }}
        </span>
    </a>
@endauth
@guest
      <i class="bi bi-bag text-xl cursor-pointer"></i>
@endguest

          

        </div>

    </div>
</x-layout>