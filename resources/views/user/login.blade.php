<x-layout>
    <body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
        <x-flash />
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-blue-600">Smart Tech Store</h1>
            <p class="text-gray-500 mt-2">Sign in to your account</p>
        </div>

        <!-- Sign In Form -->
        <form method="POST" action="/login" class="space-y-5">
            <!-- CSRF (Laravel) -->
             @csrf 

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email Address
                </label>
                <input
                    type="email"
                    name="email"
                    placeholder="Enter your email"
                    class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>
                <input
                    type="password"
                    name="password"
                    placeholder="Enter your password"
                    class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                >
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2 text-gray-600">
                    <input type="checkbox" name="remember" class="rounded">
                    Remember me
                </label>
                <a href="#" class="text-blue-600 font-medium hover:underline">
                    Forgot password?
                </a>
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300"
            >
                Sign In
            </button>
        </form>

        <!-- Footer -->
        <p class="text-center text-sm text-gray-600 mt-6">
            Don’t have an account?
            <a href="/signup" class="text-blue-600 font-semibold hover:underline">
                Create one
            </a>
        </p>

    </div>

</body>
</x-layout>