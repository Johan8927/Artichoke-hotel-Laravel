<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <!-- Civility -->
        <div>
            <x-input-label for="civility" :value="__('Civility')" />
            <select id="civility" name="civility" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" autocomplete="honorific-prefix">
                <option value="" {{ old('civility', $user->civility) == '' ? 'selected' : '' }}>{{ __('Select your civility') }}</option>
                <option value="Mr" {{ old('civility', $user->civility) == 'Mr' ? 'selected' : '' }}>{{ __('Mr') }}</option>
                <option value="Ms" {{ old('civility', $user->civility) == 'Ms' ? 'selected' : '' }}>{{ __('Ms') }}</option>
                <option value="Other" {{ old('civility', $user->civility) == 'Other' ? 'selected' : '' }}>{{ __('Other') }}</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('civility')" />
        </div>

        <!-- First Name -->
        <div>
            <x-input-label for="firstName" :value="__('First Name')" />
            <x-text-input id="firstName" name="firstName" type="text" class="mt-1 block w-full" :value="old('firstName', $user->firstName)" required autocomplete="given-name" />
            <x-input-error class="mt-2" :messages="$errors->get('firstName')" />
        </div>

        <!-- Last Name -->
        <div>
            <x-input-label for="lastName" :value="__('Last Name')" />
            <x-text-input id="lastName" name="lastName" type="text" class="mt-1 block w-full" :value="old('lastName', $user->lastName)" required autocomplete="family-name" />
            <x-input-error class="mt-2" :messages="$errors->get('lastName')" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
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
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error class="mt-2" :messages="$errors->get('password')" />
        </div>

        <!-- Password Confirmation -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
        </div>

        <!-- Address -->
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)" autocomplete="street-address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <!-- ZIP Code -->
        <div>
            <x-input-label for="ZIP_code" :value="__('ZIP Code')" />
            <x-text-input id="ZIP_code" name="ZIP_code" type="text" class="mt-1 block w-full" :value="old('ZIP_code', $user->ZIP_code)" autocomplete="postal-code" />
            <x-input-error class="mt-2" :messages="$errors->get('ZIP_code')" />
        </div>

        <!-- City -->
        <div>
            <x-input-label for="city" :value="__('City')" />
            <x-text-input id="city" name="city" type="text" class="mt-1 block w-full" :value="old('city', $user->city)" autocomplete="address-level2" />
            <x-input-error class="mt-2" :messages="$errors->get('city')" />
        </div>

        <!-- Country -->
        <div>
            <x-input-label for="country" :value="__('Country')" />
            <select id="country" name="country" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" autocomplete="country">
                <option value="" {{ old('country', $user->country) == '' ? 'selected' : '' }}>{{ __('Select your country') }}</option>
                <option value="France" {{ old('country', $user->country) == 'France' ? 'selected' : '' }}>France</option>
                <option value="United States" {{ old('country', $user->country) == 'United States' ? 'selected' : '' }}>United States</option>
                <option value="Canada" {{ old('country', $user->country) == 'Canada' ? 'selected' : '' }}>Canada</option>
                <option value="United Kingdom" {{ old('country', $user->country) == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                <option value="Germany" {{ old('country', $user->country) == 'Germany' ? 'selected' : '' }}>Germany</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('country')" />
        </div>

        <!-- Phone Number -->
        <div>
            <x-input-label for="phone_number" :value="__('Phone Number')" />
            <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full" :value="old('phone_number', $user->phone_number)" autocomplete="tel" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>

    <!-- Formulaire séparé pour renvoyer le lien de vérification -->
    <form id="update-profile" method="post" action="{{ route('profile.update') }}">
        @csrf
    </form>
</section>
