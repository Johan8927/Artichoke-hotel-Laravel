<script src="https://cdn.tailwindcss.com"></script>
<div class="bg-amber-50 min-h-screen">
    <!-- Header -->
    <header class="fixed top-0 left-0 w-full bg-amber-50 bg-opacity-100 text-purple-950 z-50 shadow-lg animate-slide-down">
        <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between h-16">
            <button class="mobile-menu-button p-2 lg:hidden">
                <span class="material-icons-outlined text-2xl">menu</span>
            </button>
            <div class="text-xl font-bold text-purple-950">
                Hotel Artichaut
            </div>
            <div class="flex items-center space-x-2">
                <a href="{{ route('dashboard') }}"
                   class="nav-links material-icons-outlined p-2 cursor-pointer transition-transform duration-300 hidden md:block">Home</a>
                <span class="nav-links material-icons-outlined p-2 cursor-pointer transition-transform duration-300 hidden md:block">Explore</span>
                <span class="nav-links material-icons-outlined p-2 cursor-pointer transition-transform duration-300 hidden md:block">Rooms</span>
                <span class="nav-links material-icons-outlined p-2 cursor-pointer transition-transform duration-300 hidden md:block">About</span>
                <span class="nav-links material-icons-outlined p-2 cursor-pointer transition-transform duration-300 hidden md:block">Contact</span>
                <a href="{{ route('login') }}"
                   class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-lime-500 hover:bg-lime-600 border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500">
                    <span class="material-icons-outlined mr-2"></span>
                    Book Now
                </a>
                <a href="{{ route('login') }}">
                    <img class="w-10 h-10 rounded-full transition-transform duration-300 hover:scale-110 object-cover"
                         src="https://i.pinimg.com/564x/de/0f/3d/de0f3d06d2c6dbf29a888cf78e4c0323.jpg"
                         alt="Profile">
                </a>
            </div>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-red-500 hover:bg-red-600 border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    <span class="material-icons-outlined mr-2"></span>
                    Logout
                </button>
            </form>
        </div>
    </header>
    <!-- Header -->

    <div class="bg-amber-50 min-h-screen">
        <div class="max-w-md mx-auto mt-24">
            <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-400 text-center">{{ __('Edit Profile') }}</h1>
            <form method="post" action="{{ route('profile.update') }}" class="p-4">
                @csrf
                @method('patch')

                <!-- Civility -->
                <div class="mb-4">
                    <x-input-label for="civility" :value="__('Civility')" class="block text-gray-700 font-bold mb-2" />
                    <select id="civility" name="civility"
                            style="background-color: white !important;"
                            class="mt-1 block w-full py-2 px-3 bg-white border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-gray-500"
                            autocomplete="honorific-prefix">
                        <option value="" {{ old('civility', $user->civility) == '' ? 'selected' : '' }}>
                            {{ __('Select your civility') }}
                        </option>
                        <option value="Mr" {{ old('civility', $user->civility) == 'Mr' ? 'selected' : '' }}>
                            {{ __('Mr') }}
                        </option>
                        <option value="Ms" {{ old('civility', $user->civility) == 'Ms' ? 'selected' : '' }}>
                            {{ __('Ms') }}
                        </option>
                        <option value="Other" {{ old('civility', $user->civility) == 'Other' ? 'selected' : '' }}>
                            {{ __('Other') }}
                        </option>
                    </select>
                    <x-input-error class="mt-2" :messages="$errors->get('civility')" />
                </div>

                <!-- First Name -->
                <div class="mb-4">
                    <x-input-label for="firstName" :value="__('First Name')" class="block text-gray-700 font-bold mb-2" />
                    <x-text-input id="firstName" name="firstName" type="text"
                                  style="background-color: white !important;"
                                  class="mt-1 block w-full py-2 px-3 bg-white border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-gray-500"
                                  :value="old('firstName', $user->firstName)" required autocomplete="given-name" />
                    <x-input-error class="mt-2" :messages="$errors->get('firstName')" />
                </div>

                <!-- Last Name -->
                <div class="mb-4">
                    <x-input-label for="lastName" :value="__('Last Name')" class="block text-gray-700 font-bold mb-2" />
                    <x-text-input id="lastName" name="lastName" type="text"
                                  style="background-color: white !important;"
                                  class="mt-1 block w-full py-2 px-3 bg-white border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-gray-500"
                                  :value="old('lastName', $user->lastName)" required autocomplete="family-name" />
                    <x-input-error class="mt-2" :messages="$errors->get('lastName')" />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="block text-gray-700 font-bold mb-2" />
                    <x-text-input id="email" name="email" type="email"
                                  style="background-color: white !important;"
                                  class="mt-1 block w-full py-2 px-3 bg-white border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-gray-500"
                                  :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                {{ __('Your email address is unverified.') }}
                                <button form="send-verification"
                                        class="underline text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:underline transition duration-150 ease-in-out">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>
                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="block text-gray-700 font-bold mb-2" />
                    <x-text-input id="password" name="password" type="password"
                                  style="background-color: white !important;"
                                  class="mt-1 block w-full py-2 px-3 bg-white border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-gray-500"
                                  autocomplete="new-password" />
                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                </div>

                <!-- Password Confirmation -->
                <div class="mb-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-gray-700 font-bold mb-2" />
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                  style="background-color: white !important;"
                                  class="mt-1 block w-full py-2 px-3 bg-white border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-gray-500"
                                  autocomplete="new-password" />
                    <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
                </div>

                <!-- Address -->
                <div class="mb-4">
                    <x-input-label for="address" :value="__('Address')" class="block text-gray-700 font-bold mb-2" />
                    <x-text-input id="address" name="address" type="text"
                                  style="background-color: white !important;"
                                  class="mt-1 block w-full py-2 px-3 bg-white border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-gray-500"
                                  :value="old('address', $user->address)" autocomplete="street-address" />
                    <x-input-error class="mt-2" :messages="$errors->get('address')" />
                </div>

                <!-- ZIP Code -->
                <div class="mb-4">
                    <x-input-label for="ZIP_code" :value="__('ZIP Code')" class="block text-gray-700 font-bold mb-2" />
                    <x-text-input id="ZIP_code" name="ZIP_code" type="text"
                                  style="background-color: white !important;"
                                  class="mt-1 block w-full py-2 px-3 bg-white border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-gray-500"
                                  :value="old('ZIP_code', $user->ZIP_code)" autocomplete="postal-code" />
                    <x-input-error class="mt-2" :messages="$errors->get('ZIP_code')" />
                </div>

                <!-- City -->
                <div class="mb-4">
                    <x-input-label for="city" :value="__('City')" class="block text-gray-700 font-bold mb-2" />
                    <x-text-input id="city" name="city" type="text"
                                  style="background-color: white !important;"
                                  class="mt-1 block w-full py-2 px-3 bg-white border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-gray-500"
                                  :value="old('city', $user->city)" autocomplete="address-level2" />
                    <x-input-error class="mt-2" :messages="$errors->get('city')" />
                </div>

                <!-- Country -->
                <div class="mb-4">
                    <x-input-label for="country" :value="__('Country')" class="block text-gray-700 font-bold mb-2" />
                    <select id="country" name="country"
                            class="mt-1 block w-full py-2 px-3 bg-white border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-gray-500"
                            autocomplete="country">
                        <option value="" {{ old('country', $user->country) == '' ? 'selected' : '' }}>
                            {{ __('Select your country') }}
                        </option>
                        <option value="France" {{ old('country', $user->country) == 'France' ? 'selected' : '' }}>
                            France
                        </option>
                        <option value="United States" {{ old('country', $user->country) == 'United States' ? 'selected' : '' }}>
                            United States
                        </option>
                        <option value="Canada" {{ old('country', $user->country) == 'Canada' ? 'selected' : '' }}>
                            Canada
                        </option>
                        <option value="United Kingdom" {{ old('country', $user->country) == 'United Kingdom' ? 'selected' : '' }}>
                            United Kingdom
                        </option>
                        <option value="Germany" {{ old('country', $user->country) == 'Germany' ? 'selected' : '' }}>
                            Germany
                        </option>
                    </select>
                    <x-input-error class="mt-2" :messages="$errors->get('country')" />
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <x-input-label for="phone_number" :value="__('Phone Number')" class="block text-gray-700 font-bold mb-2" />
                    <x-text-input id="phone_number" name="phone_number" type="text"
                                  style="background-color: white !important;"
                                  class="mt-1 block w-full py-2 px-3 bg-white border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-gray-500"
                                  :value="old('phone_number', $user->phone_number)" autocomplete="tel" />
                    <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
                </div>

                <!-- Buttons -->
                <div class="flex items-center justify-between">
                    <button type="reset"
                            class="text-gray-500 hover:text-gray-700 focus:outline-none focus:underline transition duration-150 ease-in-out">
                        Cancel
                    </button>
                    <button type="submit"
                            class="bg-green-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-green-600 focus:outline-none focus:shadow-outline-purple active:bg-green-700 transition duration-150 ease-in-out">
                        Save Changes
                    </button>
                </div>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition
                       x-init="setTimeout(() => show = false, 2000)"
                       class="text-sm text-gray-600 dark:text-gray-400 text-center mt-4">
                        {{ __('Saved.') }}
                    </p>
                @endif
            </form>
        </div>

        <!-- Formulaire séparé pour renvoyer le lien de vérification -->
        <form id="update-profile" method="post" action="{{ route('profile.update') }}">
            @csrf
        </form>
    </div>
</div>
