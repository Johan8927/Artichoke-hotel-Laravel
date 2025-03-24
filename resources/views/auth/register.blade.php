<x-guest-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    <div class="mt-16">
        <h1 class="text-4xl text-black text-center luxurious-roman-regular">Welcome, please register to continue</h1>
    </div>

    <!-- Centering form container -->
    <div class="mt-16 flex justify-center">
        <div class="w-full max-w-2xl bg-white py-8 px-6 shadow-lg rounded-lg">
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <!-- Civility Field -->
                <div class="flex flex-col space-y-2">
                    <label for="civility" class="block font-medium text-gray-700">Civility</label>
                    <select name="civility" id="civility"
                            class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none">
                        <option value="Mr" {{ old('civility') == 'Monsieur' ? 'selected' : '' }}>Mr</option>
                        <option value="Ms" {{ old('civility') == 'Madame' ? 'selected' : '' }}>Mme</option>
                    </select>
                    @error('civility')
                    <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- First Name Field -->
                <div class="flex flex-col space-y-2">
                    <label for="firstName" class="block font-medium text-gray-700">First Name</label>
                    <input id="firstName" type="text" name="firstName" :value="old('firstName')" required autofocus
                           class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"/>
                    @error('firstName')
                    <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Last Name Field -->
                <div class="flex flex-col space-y-2">
                    <label for="lastName" class="block font-medium text-gray-700">Last Name</label>
                    <input id="lastName" type="text" name="lastName" :value="old('lastName')" required
                           class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"/>
                    @error('lastName')
                    <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Address Field -->
                <div class="flex flex-col space-y-2">
                    <label for="address" class="block font-medium text-gray-700">Address</label>
                    <input id="address" type="text" name="address" :value="old('address')" required
                           class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"/>
                    @error('address')
                    <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- ZIP Code Field -->
                <div class="flex flex-col space-y-2">
                    <label for="ZIP_code" class="block font-medium text-gray-700">ZIP Code</label>
                    <input id="ZIP_code" type="text" name="ZIP_code" :value="old('ZIP_code')" required
                           class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"/>
                    @error('ZIP_code')
                    <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- City Field -->
                <div class="flex flex-col space-y-2">
                    <label for="city" class="block font-medium text-gray-700">City</label>
                    <input id="city" type="text" name="city" :value="old('city')" required
                           class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"/>
                    @error('city')
                    <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Country Field -->
                <div class="flex flex-col space-y-2">
                    <label for="country" class="block font-medium text-gray-700">Country</label>
                    <input id="country" type="text" name="country" :value="old('country')" required
                           class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"/>
                    @error('country')
                    <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Phone Number Field -->
                <div class="flex flex-col space-y-2">
                    <label for="phone_number" class="block font-medium text-gray-700">Phone Number</label>
                    <input id="phone_number" type="text" name="phone_number" :value="old('phone_number')" required
                           class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"/>
                    @error('phone_number')
                    <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="flex flex-col space-y-2">
                    <label for="email" class="block font-medium text-gray-700">E-Mail Address</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                           class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"/>
                    @error('email')
                    <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="flex flex-col space-y-2">
                    <label for="password" class="block font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                           class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"/>
                    @error('password')
                    <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password Field -->
                <div class="flex flex-col space-y-2">
                    <label for="password_confirmation" class="block font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                           autocomplete="new-password"
                           class="shadow-sm block w-full py-2 sm:text-sm rounded-md text-gray-800 bg-white border-gray-300 focus:ring-primary-500 focus:border-primary-500 placeholder-gray-600 focus:outline-none"/>
                    @error('password_confirmation')
                    <div class="text-red-500 text-xs mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Terms Checkbox -->
                <div class="flex flex-col space-y-2">
                    <label class="block font-medium text-gray-600 items-start space-x-2">
                        <input type="checkbox" name="terms"
                               class="h-4 w-4 rounded border-gray-300 focus:ring-indigo-500 text-indigo-600" required/>
                        <span>
                            I have read and agree to the
                            <a href="/legal/privacy" target="_blank" class="text-primary-600 hover:text-primary-700">Privacy Policy</a>
                            and
                            <a href="/legal/terms" target="_blank" class="text-primary-600 hover:text-primary-700">Terms and Conditions</a>.
                        </span>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button
                        type="submit"
                        class="inline-flex items-center justify-center px-4 py-2.5 border border-transparent text-sm font-medium rounded-md shadow-sm focus:outline-none ring-2 ring-offset-2 ring-transparent ring-offset-transparent disabled:bg-gray-400 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-white w-full">
                        <span>Sign up</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
