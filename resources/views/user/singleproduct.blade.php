<x-layout>
    <x-nav_user />




<form action="/shop" method="POST" class="grid grid-cols-12 gap-5 my-10 mx-auto w-[70%]  ">
  @csrf
  

        <div class="  col-span-6 sticky top-24 self-start ">
          <flash />
            <div class="">
                <img class="w-full" src="{{ asset('storage/' . $singledata['product_image']) }}" alt="">
               
            </div> 
        </div>
        <div class=" col-span-6 w-[65%]  mx-auto">
            <h4 class="text-gray-400 capitalize">Smarttech my</h4>
            <h4 class="text-2xl font-semibold">{{$singledata['product_name']  }}</h4>
            

            <h4 class="text-gray-800 my-8">FROM RS.{{ $singledata['product_price'] }} PKR</h4>
            
            <h4 class="text-sm my-2 ">RAM</h4>
           <div class=" w-1/2 flex gap-3 max-w-sm">
  <button class="option-btn px-6 py-2 rounded-full border text-sm font-medium">
    8GB
  </button>

  <button class="option-btn px-6 py-2 rounded-full border text-sm font-medium">
    16GB
  </button>
</div>

  <h4 class="mt-8 mb-3 text-sm">Storage</h4>
<div class="flex gap-3 w-full  ">
  
 <button class="option-btn px-6 py-2 rounded-full border text-sm font-medium">
    256GB SSD
  </button>

  <button class="option-btn px-6 py-2 rounded-full border text-sm font-medium">
    512GB SSD
  </button>
</div>
<h4 class="mb-1 mt-5 text-sm">Quantity</h4>
 <input class="py-2 border text-center " type="number" name="" placeholder="0" id="">




<input type="hidden" name="product_id" value="{{ $singledata['id'] }}">

<div>
    <button type="submit"
        class="mt-6 border text-md hover:border-2 cursor-pointer w-full py-3">
        Add to Cart
    </button>

    <button type="submit"
        class="mt-6 text-md cursor-pointer w-full py-3 bg-blue-800 text-white">
        Buy it now
    </button>
</div>

<p class="my-4 text-gray-600">Pickup available at Cova Square Kota Damansara</p>
 <p class="my-4 text-sm w-full">{{ $singledata['product_description'] }}</p>
        </div>
    </form>
   
    
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