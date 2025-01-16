<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Welcome Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold">{{ __("Welcome, nice to see you again ") . auth()->user()->name }}</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        {{ __("Here's an overview of your account and recent activities.") }}
                    </p>
                </div>
            </div>

            <!-- User Information Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ __("Account Information") }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-1">
                        {{ __("Manage your profile details below.") }}
                    </p>

                    <form action="{{ route('users.update', auth()->user()) }}" method="POST" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                              :value="auth()->user()->name" required />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                              :value="auth()->user()->email" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Password -->
                        <div>
                            <x-input-label for="password" :value="__('Password (leave blank to keep current)')" />
                            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-between">
                            <x-primary-button>{{ __('Save Changes') }}</x-primary-button>
                            @if (session('status') === 'profile-updated')
                                <p class="text-sm text-green-600 dark:text-green-400">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ __("Recent Activity") }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mt-1">
                        {{ __("Keep track of your latest actions.") }}
                    </p>
                    <ul class="mt-4 space-y-2">
                        <!-- Example Activity -->
                        <li class="text-gray-700 dark:text-gray-300 flex items-center">
                            <span class="w-2.5 h-2.5 bg-green-500 rounded-full mr-2"></span>
                            {{ __("You updated your profile details.") }} <span class="text-sm text-gray-500 ml-2">(2 hours ago)</span>
                        </li>
                        <li class="text-gray-700 dark:text-gray-300 flex items-center">
                            <span class="w-2.5 h-2.5 bg-blue-500 rounded-full mr-2"></span>
                            {{ __("You logged in from a new device.") }} <span class="text-sm text-gray-500 ml-2">(Yesterday)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
