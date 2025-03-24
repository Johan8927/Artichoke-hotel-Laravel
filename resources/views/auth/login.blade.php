<script src="https://cdn.tailwindcss.com"></script>

<div class="client-account-container">
    <p class="text-4xl text-black luxurious-roman-regular">Please log in to continue</p>

    <div class="mt-40 text-center">
        <p class="text-2xl luxurious-roman-regular text-gray-700">
            New to hotel Artichaud?
            <a href="{{ route('register') }}" class="text-green-600 underline">Sign up now</a>
        </p>
    </div>

    <!-- Form Section -->
    <div class="form-container">
        <div class="max-w-md mx-auto p-8 border rounded-lg shadow-lg bg-amber-50">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block text-2xl luxurious-roman-regular text-gray-700">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md mt-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                        required
                    />
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-2xl luxurious-roman-regular text-gray-700">Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-md mt-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                        required
                    />
                </div>

                <div class="text-center">
                    <button type="submit"
                            class="bg-green-600 text-white text-1xl luxurious-roman-regular py-2 px-6 rounded-md hover:bg-green-700 transition duration-300">
                        Login
                    </button>
                    <br><br>
                    <a href="{{ route('password.request') }}" class="text-blue-500 hover:text-blue-600 text-1xl luxurious-roman-regular">Forgot Password?</a>
                    <p class="mt-6 text-gray-600 text-2xl luxurious-roman-regular">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-blue-500 text-2xl luxurious-roman-regular hover:text-blue-600">Sign Up</a>
                    </p>
                </div>
            </form>

            <!-- Logout Button (Visible only if user is authenticated) -->
            @auth
                <form method="POST" action="{{ route('logout') }}" class="mt-6 text-center">
                    @csrf
                    <button type="submit"
                            class="bg-red-600 text-white text-1xl luxurious-roman-regular py-2 px-6 rounded-md hover:bg-red-700 transition duration-300">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>
</div>
