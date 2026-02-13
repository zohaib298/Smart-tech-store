<x-layout>
   
  <x-nav_user />
  <img src="{{ asset('sale.jpg') }}" alt="My Image">
    <div class="container mx-auto my-10">
  @if (count($products)>0)
      <div class="w-[95%] sm:w-[90%] lg:w-[75%] mx-auto">
    
    <div class="p-2 relative">
        <h3 class="text-2xl my-5">Best Sellers</h3>

        <div class="grid 
                    grid-cols-2 
                    sm:grid-cols-3 
                    lg:grid-cols-4 
                    gap-4">
                    
            @foreach ($products as $item)
                <a href="/singleproduct/{{ $item['id'] }}" 
                   class="p-3 text-center h-[260px]">

                    <img src="{{ asset('storage/' . $item['product_image']) }}"  
                         class="h-[180px] w-full object-cover rounded">

                    <h4 class="text-gray-700 my-0 sm:my-2 text-start text-sm sm:text-base">
                        {{ $item['product_name'] }}
                    </h4>

                    <h4 class="font-semibold text-start text-sm sm:text-base mb-4">
                        From Rs. {{ $item['product_price'] }} pkr
                    </h4>
                </a>
            @endforeach

        </div>
    </div>

</div>
  @else
      <h4 class="text-red-500 text-center my-10">No deals available</h4>
  @endif
</div>
<img 
    src="{{ asset('multi.jpg') }}" 
    alt="" 
    class="my-2 w-full h-auto object-cover rounded"
>
<div class="container mx-auto my-10">
    <div class="w-[95%] sm:w-[90%] lg:w-[75%] mx-auto">
    <div class="p-2 relative">
        <h3 id="shopbybrand" class="text-2xl my-5">SHOP BY BRAND</h3>

        <div class="
            flex gap-4 overflow-x-auto scrollbar-hide
            sm:grid sm:grid-cols-2 
            lg:grid-cols-3 
            sm:overflow-visible
        ">
            
            <a href="/company/dell" 
               class="min-w-[80%] sm:min-w-0 p-3">
                <img class="h-[200px] sm:h-[250px] lg:h-[300px] w-full object-cover rounded"
                     src="{{ asset('dell.jpg') }}" alt="">
                <div class="flex gap-2 mt-2 items-center">
                    <h4 class="text-md">DELL</h4>
                    <i class="bi bi-arrow-right"></i>
                </div>
            </a>

            <a href="/company/lenovo" 
               class="min-w-[80%] sm:min-w-0 p-3">
                <img class="h-[200px] sm:h-[250px] lg:h-[300px] w-full object-cover rounded"
                     src="{{ asset('lenove.jpg') }}" alt="">
                <div class="flex gap-2 mt-2 items-center">
                    <h4 class="text-md">LENOVO</h4>
                    <i class="bi bi-arrow-right"></i>
                </div>
            </a>

            <a href="/company/hp" 
               class="min-w-[80%] sm:min-w-0 p-3">
                <img class="h-[200px] sm:h-[250px] lg:h-[300px] w-full object-cover rounded"
                     src="{{ asset('hp.jpg') }}" alt="">
                <div class="flex gap-2 mt-2 items-center">
                    <h4 class="text-md">HP</h4>
                    <i class="bi bi-arrow-right"></i>
                </div>
            </a>

        </div>
    </div>
</div>
        <x-brands /> 
        <div class="flex flex-col md:flex-row gap-4 w-[95%] sm:w-[90%] lg:w-[80%] mx-auto my-10">

    <div class="bg-gray-100 w-full p-5 rounded">
        <img 
            src="https://smarttechstore.com/cdn/shop/files/van-car-delivery-truck-computer-icons-car-0d26b6efb5a98155b76b7158dc0934a7.png?v=1766216479&width=200" 
            alt="" 
            class="mx-auto h-16 sm:h-20 object-contain">

        <p class="text-center mt-4 text-sm sm:text-base leading-relaxed">
            We sell original, high-quality laptops online with secure packaging and fast delivery. 
            Order today and get your laptop delivered safely within 3 days, backed by reliable service and customer support.
        </p>
    </div>

    <div class="bg-gray-100 w-full p-5 rounded">
        <img 
            src="https://smarttechstore.com/cdn/shop/files/product-return-policy-money-back-guarantee-computer-icons-return-51e31906349ec7a0ecff97ba59a11d84.png?v=1766216671&width=200" 
            alt="" 
            class="mx-auto h-16 sm:h-20 object-contain">

        <p class="text-center mt-4 text-sm sm:text-base leading-relaxed">
            Facing an issue with your laptop? No problem. We offer a 3-month replacement policy for eligible issues, ensuring a safe and trusted buying experience.
        </p>
    </div>

</div>


       <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 
            gap-6 w-[95%] sm:w-[90%] lg:w-[80%] 
            mx-auto my-20">

    <div class="bg-white shadow-xl rounded-2xl 
                flex items-center justify-center 
                h-[180px] sm:h-[220px] lg:h-[250px] p-6">
        <img src="https://smarttechstore.com/cdn/shop/files/lazada-logo-png_seeklogo-504219.png?v=1766236339&width=1000"
             class="max-h-full object-contain">
    </div>

    <div class="bg-white shadow-xl rounded-2xl 
                flex items-center justify-center 
                h-[180px] sm:h-[220px] lg:h-[250px] p-6">
        <img src="https://smarttechstore.com/cdn/shop/files/shopee.jpg?v=1766236318&width=1000"
             class="max-h-full object-contain">
    </div>

    <div class="bg-white shadow-xl rounded-2xl 
                flex items-center justify-center 
                h-[180px] sm:h-[220px] lg:h-[250px] p-6">
        <img src="https://smarttechstore.com/cdn/shop/files/tiktok_shop.webp?v=1766237079&width=1000"
             class="max-h-full object-contain">
    </div>

</div>
        </div>
        
     <x-footer />


         
</div>
</x-layout>