<x-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
            
            <!-- Heading -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-blue-600">Smart Tech Store</h1>
                <p class="text-gray-500 mt-2">Create your account</p>
            </div>

            <!-- Sign Up Form -->
            <form class="space-y-5" method="POST" action="/signup">
                @csrf
                
                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Full Name
                    </label>
                    <input 
                        type="text" 
                        name="name"
                        placeholder="Enter your name"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    >
                    @error('name')
                        <p class="text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

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
                     @error('email')
                        <p class="text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Password
                    </label>
                    <input 
                        type="password" 
                        name="password"
                        placeholder="Create a password"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        
                    >
                     @error("password")
                        <p class="text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Role
                    </label>
                    <select name="role" id="">
                        <option value="" disabled selected class="">select a role</option>
                        <option value="user">User</option>
                        <option value="seller">Seller</option>
                    </select>
                     @error("role")
                        <p class="text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <!-- Terms -->
                <div class="flex items-start gap-2 text-sm text-gray-600">
                    <input type="checkbox" name="terms" class="mt-1" required>
                    <p>
                        I agree to the 
                        <span class="text-blue-600 font-medium cursor-pointer">Terms</span> 
                        and 
                        <span class="text-blue-600 font-medium cursor-pointer">Privacy Policy</span>
                    </p>
                </div>

                <!-- Button -->
                <button 
                    type="submit"
                    class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300"
                >
                    Create Account
                </button>

            </form>

            <!-- Footer -->
            <p class="text-center text-sm text-gray-600 mt-6">
                Already have an account?
                <a href="/login" class="text-blue-600 font-semibold cursor-pointer">Sign in</a>
            </p>

        </div>
    </div>
</x-layout>
