<script src="https://cdn.tailwindcss.com"></script>
<div class="client-account-container">
    <p class="text-4xl text-black luxurious-roman-regular">Please log in to continue</p>
    <div class="mt-40 text-center">
        <p class="text-2xl luxurious-roman-regular text-gray-700">New to hotel Artichaud? <span class="text-green-600 underline">Sign up now</span></p>
    </div>
    <div class="mt-10 text-center">
    </div>
    <!-- Form Section -->
    <div class="form-container">
        <div class="max-w-md mx-auto p-8 border rounded-lg shadow-lg bg-amber-50">
            <div class="mb-6">
                <label for="clientEmail" class="block text-2xl luxurious-roman-regular text-gray-700">Email</label>
                <input
                    id="clientEmail"
                    type="email"
                    v-model="clientEmail"
                    placeholder="Enter your email"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md mt-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                />
            </div>

            <div class="mb-6">
                <label for="clientPassword" class="block text-2xl luxurious-roman-regular text-gray-700">Password</label>
                <input
                    id="clientPassword"
                    type="password"
                    v-model="clientPassword"
                    placeholder="Enter your password"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md mt-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                />
            </div>

            <div class="text-center">
                <button @click="submitForm"
                        class="bg-green-600 text-white text-1xl luxurious-roman-regular py-2 px-6 rounded-md hover:bg-green-700 transition duration-300">
                    Submit
                </button>
                <br><br>
                <a href="/register" class="text-blue-500 hover:text-blue-600 text-1xl luxurious-roman-regular">Forgot Password?</a>
                <p class="mt-6 text-gray-600 text-2xl luxurious-roman-regular">
                    Don't have an account ? <a href="/register" class="text-blue-500 text-2xl luxurious-roman-regular hover:text-blue-600"> Sign Up</a>
                </p>
            </div>
        </div>
    </div>
</div>
