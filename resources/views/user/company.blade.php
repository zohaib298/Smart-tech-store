<x-layout>
    <x-nav_user />
 <div class="container mx-auto my-10">
       <div class=" w-[75%] mx-auto grid-cols-12">
            <div class=" col-span-12 p-2 relative ">
               
                <div class="flex scrollbar flex-wrap gap-2 ">
                @foreach ($relevantproduct as $item)
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
        <x-brands />
        
 
</div>
<x-footer  />
 @else
      <h4 class="text-red-500 text-center my-10">No deals available</h4>
</x-layout>