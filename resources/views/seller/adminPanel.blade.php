<x-layout>
    <x-nav_user />
    <body class="bg-neutral-100 text-neutral-900">

  <!-- Top bar -->
  

  <div class="max-w-7xl mx-auto px-6 py-8 grid grid-cols-1 lg:grid-cols-[240px_1fr] gap-8">

    <!-- Sidebar -->
    <aside class="bg-white rounded-2xl  p-5 h-fit shadow-sm">
      <h2 class="text-sm font-semibold text-neutral-500 mb-4">
        Seller Panel
      </h2>
      <nav class="space-y-1 text-sm">
        <a href="#" class="block px-4 py-2 rounded-lg bg-neutral-900 text-white">
          Add Product
        </a>
        <a href="#" class="block px-4 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100">
          Products
        </a>
        <a href="#" class="block px-4 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100">
          Orders
        </a>
      </nav>
    </aside>

    <!-- Main -->
    <main class="space-y-6">

      <div>
        <h1 class="text-3xl font-semibold tracking-tight">
          Add new product
        </h1>
        <p class="text-neutral-500 mt-1">
          Enter product details below.
        </p>
      </div>

      <!-- Form card -->
     
          
     
      <form action="/seller/add-product" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl shadow-sm p-8 space-y-8">
          @csrf
        <div>
          <label class="text-sm font-medium text-neutral-700">
            Product name
          </label>
          <input
            type="text"
            value="{{ old ('product_price') }}"
            name="product_name"
            placeholder="Acer notebook"
            class="mt-2 w-full rounded-xl border-neutral-200 bg-neutral-50 px-4 py-3 focus:bg-white focus:border-neutral-400 focus:ring-0"
          />
          @error('product_name')
              <p class="text-red-500">
                {{ $message }}
              </p>
          @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label class="text-sm font-medium text-neutral-700">
              Price
            </label>
            <input
              type="number"
              value="{{ old ('product_price') }}"
              name="product_price"
              placeholder="99.99"
              class="mt-2 w-full rounded-xl border-neutral-200 bg-neutral-50 px-4 py-3 focus:bg-white focus:border-neutral-400 focus:ring-0"
            />
            @error('product_price')
              <p class="text-red-500">
                {{ $message }}
              </p>
          @enderror
          </div>

          <div>
            <label class="text-sm font-medium text-neutral-700">
              Stock
            </label>
            <input
              type="number"
              name="stock"
              value="{{ old ('stock') }}"
              placeholder="120"
              class="mt-2 w-full rounded-xl border-neutral-200 bg-neutral-50 px-4 py-3 focus:bg-white focus:border-neutral-400 focus:ring-0"
            />
            @error('stock')
              <p class="text-red-500">
                {{ $message }}
              </p>
          @enderror
          </div>
        </div>

        <div>
          <label class="text-sm font-medium text-neutral-700">
            Category
          </label>
          <select  name="category"
            class="mt-2 w-full rounded-xl border-neutral-200 bg-neutral-50 px-4 py-3 focus:bg-white focus:border-neutral-400 focus:ring-0"
          >
             <option value="">Select a company</option>
            <option value="DELL">Dell</option>
              <option value="LENOVO">Lenovo</option>
              <option value="HP">Hp</option>
          </select>
           @error('category')
              <p class="text-red-500">
                {{ $message }}
              </p>
          @enderror
        </div>

        <div>
          <label class="text-sm font-medium text-neutral-700">
            Product image
          </label>
          <input
          name="product_image"
          value="{{ old ('product_image') }}"
            type="file"
            class="mt-2 block w-full text-sm text-neutral-600"
          />
           @error('product_image')
              <p class="text-red-500">
                {{ $message }}
              </p>
          @enderror
        </div>

        <div>
          <label class="text-sm font-medium text-neutral-700">
            Description
          </label>
          <textarea
          name="product_description"
          value="{{ old ('product_description') }}"
            rows="4"
            placeholder="Short product description"
            class="mt-2 w-full rounded-xl border-neutral-200 bg-neutral-50 px-4 py-3 focus:bg-white focus:border-neutral-400 focus:ring-0"
          ></textarea>
           @error('product_description')
              <p class="text-red-500">
                {{ $message }}
              </p>
          @enderror
        </div>

        <div class="flex justify-end">
          <button
            type="submit"
            class="rounded-xl bg-neutral-900 px-8 py-3 text-white font-medium hover:bg-neutral-800"
          >
            Save product
          </button>
        </div>

      </form>
       
    </main>
  </div>

</body>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    const imageInput = document.querySelector('input[name="product_image"]');

    // Image preview
    const preview = document.createElement("img");
    preview.className = "mt-4 h-32 rounded-xl object-cover hidden";
    imageInput.after(preview);

    imageInput.addEventListener("change", () => {
      const file = imageInput.files[0];
      if (!file) return;

      const reader = new FileReader();
      reader.onload = e => {
        preview.src = e.target.result;
        preview.classList.remove("hidden");
      };
      reader.readAsDataURL(file);
    });

    // Simple validation
    form.addEventListener("submit", e => {
      const name = form.product_name.value.trim();
      const price = form.product_price.value;
      const stock = form.stock.value;
      const category = form.category.value;

      

     
    });
  });
</script>

</x-layout>