<x-layout>
    <x-nav_user />
    <body class="bg-gray-50">

  <!-- Header -->
  <section class="bg-blue-600 text-white py-16">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
      <p class="text-lg opacity-90">We’d love to hear from you. Send us a message and we’ll respond as soon as possible.</p>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-16 mx-auto w-1/2">
      <!-- Contact Form -->
      <div class="bg-white p-8 rounded-2xl shadow-md">
        <form class="space-y-6">
          
          <div>
            <label class="block text-sm font-medium mb-2">Full Name</label>
            <input 
              type="text" 
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="John Doe"
            >
          </div>

          <div>
            <label class="block text-sm font-medium mb-2">Email Address</label>
            <input 
              type="email" 
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="john@example.com"
            >
          </div>

          <div>
            <label class="block text-sm font-medium mb-2">Message</label>
            <textarea 
              rows="5"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
              placeholder="Write your message..."
            ></textarea>
          </div>

          <button 
            type="submit"
            class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700 transition"
          >
            Send Message
          </button>

        </form>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-6 text-center">
    <p class="text-sm">&copy; 2026 Your Company. All rights reserved.</p>
  </footer>

</body>
</x-layout>