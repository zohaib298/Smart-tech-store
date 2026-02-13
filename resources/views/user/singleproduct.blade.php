<x-layout>
    <x-nav_user />

    <form action="/shop" method="POST" class="grid grid-cols-1 md:grid-cols-12 gap-5 my-10 mx-auto w-[95%] sm:w-[90%] lg:w-[70%]">
        @csrf

        {{-- Product Image --}}
        <div class="md:col-span-6 sticky top-20 self-start">
            <flash />
            <div>
                <img class="w-full rounded-lg object-cover" src="{{ asset('storage/' . $singledata['product_image']) }}" alt="">
            </div> 
        </div>

        {{-- Product Details --}}
        <div class="md:col-span-6 w-full">
            <h4 class="text-gray-400 capitalize">Smarttech my</h4>
            <h4 class="text-2xl font-semibold">{{ $singledata['product_name'] }}</h4>
            <h4 class="text-gray-800 my-4 text-lg sm:text-xl">FROM RS. {{ $singledata['product_price'] }} PKR</h4>

            {{-- RAM Options --}}
            <h4 class="text-sm my-2">RAM</h4>
            <div class="flex flex-wrap gap-3 max-w-sm">
                <button class="option-btn px-4 py-2 rounded-full border text-sm font-medium">8GB</button>
                <button class="option-btn px-4 py-2 rounded-full border text-sm font-medium">16GB</button>
            </div>

            {{-- Storage Options --}}
            <h4 class="mt-6 mb-2 text-sm">Storage</h4>
            <div class="flex flex-wrap gap-3">
                <button class="option-btn px-4 py-2 rounded-full border text-sm font-medium">256GB SSD</button>
                <button class="option-btn px-4 py-2 rounded-full border text-sm font-medium">512GB SSD</button>
            </div>

            {{-- Quantity --}}
            <h4 class="mb-1 mt-5 text-sm">Quantity</h4>
            <input class="py-2 border text-center w-24" type="number" name="quantity" placeholder="0">

            <input type="hidden" name="product_id" value="{{ $singledata['id'] }}">

            {{-- Buttons --}}
            <div class="mt-6 flex flex-col gap-3">
                <button type="submit" class="border text-md hover:border-2 cursor-pointer w-full py-3 rounded">Add to Cart</button>
                <button type="submit" class="bg-blue-800 text-white text-md cursor-pointer w-full py-3 rounded">Buy it now</button>
            </div>

            <p class="my-4 text-gray-600">Pickup available at Cova Square Kota Damansara</p>
            <p class="my-4 text-sm">{{ $singledata['product_description'] }}</p>
        </div>
    </form>
   <x-brands />

   <x-footer />
    <script>
        const buttons = document.querySelectorAll('.option-btn');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                buttons.forEach(btn => {
                    btn.classList.remove('bg-blue-600', 'text-white', 'border-blue-600');
                    btn.classList.add('border-gray-300', 'text-gray-700');
                });

                button.classList.add('bg-blue-600', 'text-white', 'border-blue-600');
                button.classList.remove('border-gray-300', 'text-gray-700');
            });
        });
    </script>
</x-layout>