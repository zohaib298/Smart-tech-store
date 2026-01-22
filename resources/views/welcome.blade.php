<x-layout>
  <x-nav_user />
  <img src="{{ asset('sale.jpg') }}" alt="My Image">
    <div class="container mx-auto my-10">
  @if (count($products)>0)
       <div class=" w-[75%] mx-auto grid-cols-12">
            <div class=" col-span-12 p-2 relative ">
                <h3 class="text-2xl my-5 ">Best Sellers</h3>
               
                <div class="flex scrollbar flex-wrap gap-2 ">
                @foreach ($products as $item)
                    <a href="/singleproduct/{{$item['id']  }}" class="p-3 my-3   text-center shrink-0 h-[260px] w-[24%] ">
            <img src="{{asset('storage/' . $item['product_image']) }}"  alt="" class="h-[180px] w-full object-cover">
            <h4 class=" text-gray-700 my-2 text-start">{{ $item['product_name'] }}</h4>
            <h4 class="font-sembold text-start ">From Rs.{{ $item['product_price'] }} pkr</h4>
                    </a>
                @endforeach
                </div>
            </div>
            <div class=" col-span-2"></div>
        </div>
  @else
      <h4 class="text-red-500 text-center my-10">No deals available</h4>
  @endif
</div>
<img class="my-2" src="{{ asset('multi.jpg') }}" alt="">
<div class="container mx-auto my-10">
    <div class=" w-[75%] mx-auto grid-cols-12">
            <div class=" col-span-12 p-2 relative ">
                <h3 class="text-2xl my-5 ">SHOP BY BRAND</h3>
              
                  
             
                <div class="flex scrollbar  ">
                    <a href="/company/dell" class="p-3 my-3  ">
            <img class="h-[300px] object-cover w-full" src="{{ asset('dell.jpg') }}" alt="">
            <div class="flex gap-2">
             <h4 class=" text-md">DELL</h4>
             <i class="bi bi-arrow-right"></i>
            </div>
                    </a>
                     <a href="/company/lenovo" class="p-3 my-3  ">
            <img class="h-[300px] object-cover w-full" src="{{ asset('lenove.jpg') }}" alt="">
           <div class="flex gap-2">
             <h4 class=" text-md">LENOVO</h4>
             <i class="bi bi-arrow-right"></i>
            </div>
                    </a>
                   <a href="/company/hp" class="p-3 my-3  ">
            <img class="h-[300px] object-cover w-full" src="{{ asset('hp.jpg') }}" alt="">
            <div class="flex gap-2">
             <h4 class=" text-md">HP</h4>
             <i class="bi bi-arrow-right"></i>
            </div>
                    </a>
                </div>
                
            </div>
        </div>
</div>
</x-layout>