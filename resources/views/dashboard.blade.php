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
                <a href="{{ route('dashboard') }}" class="nav-links material-icons-outlined p-2 cursor-pointer transition-transform duration-300 hidden md:block">Home</a>
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

    <!-- Main Content -->
    <div class="mt-40 text-center p-4">
        <h1 class="text-4xl md:text-6xl lg:text-8xl text-black font-bonheur-royale">
            Welcome, nice to see you again!
        </h1>
        <div class="mt-60 md:mt-20 scale-90 md:scale-200 flex justify-center">
            <h1 class="text-4xl md:text-8xl lg:text-6xl text-black font-bonheur-royale">
                Booking Summary
            </h1>
        </div>
        <div class="flex justify-center mt-4">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="w-full max-w-5xl overflow-auto p-4 rounded-lg">
                    <table class="w-auto min-w-[450px] bg-amber-50 rounded-lg border border-gray-200">
                        <thead>
                        <tr class="border-b">
                            <th class="px-6 py-4 text-left text-gray-600 whitespace-nowrap">Product Name</th>
                            <th class="px-6 py-4 text-left text-gray-600 whitespace-nowrap">Unit Price</th>
                            <th class="px-6 py-4 text-left text-gray-600 whitespace-nowrap">Qty</th>
                            <th class="px-6 py-4 text-left text-gray-600 whitespace-nowrap">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Suite -->
                        <tr class="border-b">
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="https://suitecosy.com/photo/461_1.jpg?2024-09-3002:35:02"
                                     alt="Product" class="w-12 h-12 rounded-md">
                                <div class="flex flex-col text-left">
                                    <p class="text-gray-800 font-medium">Suite</p>
                                    <span class="text-green-500 text-sm">UBL</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-black whitespace-nowrap">$480</td>
                            <td class="px-6 py-4 text-black whitespace-nowrap">x1</td>
                            <td class="px-6 py-4 text-gray-900">$480</td>
                        </tr>
                        <!-- Luxurious Room -->
                        <tr class="border-b">
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="https://suitecosy.com/photo/461_2.jpg?2024-09-3002:35:02"
                                     alt="Product" class="w-12 h-12 rounded-md">
                                <div class="flex flex-col text-left">
                                    <p class="text-gray-800 font-medium">Luxurious room</p>
                                    <span class="text-green-500 text-sm">UBL</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-black whitespace-nowrap">$250</td>
                            <td class="px-6 py-4 text-black whitespace-nowrap">x2</td>
                            <td class="px-6 py-4 text-gray-900">$500</td>
                        </tr>
                        <!-- Standard Room -->
                        <tr>
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="https://suitecosy.com/photo/461_3.jpg?2024-09-3002:35:02"
                                     alt="Product" class="w-12 h-12 rounded-md">
                                <div class="flex flex-col text-left">
                                    <p class="text-gray-800 font-medium">Standard room</p>
                                    <span class="text-green-500 text-sm">UBL</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-black whitespace-nowrap">$100</td>
                            <td class="px-6 py-4 text-black whitespace-nowrap">x3</td>
                            <td class="px-6 py-4 text-gray-900">$300</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <h1 class="text-4xl md:text-6xl lg:text-4xl text-black font-bonheur-royale">
            Account Modification Form
        </h1>

        <!-- update profile form  -->
        <div class="mt-6 md:mt-8 scale-100 md:scale-125">
            <div class="bg-amber-50 min-h-screen">
                <div class="mt-40 text-center p-4">
                    <div class="mt-6 md:mt-8 flex justify-center">
                        <div class="w-full max-w-lg bg-amber-50 p-6 md:p-10 shadow-xl rounded-2xl">
                            <form class="space-y-4" method="get">
                                @csrf
                                @method('get')
                                <label for="civility">Civility</label>
                                <input type="text" id="civility" name="civility" value="{{ old('civility') }}"
                                       class="w-full px-3 py-2 border rounded-md">

                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" name="firstName" value="{{ old('firstName') }}"
                                       class="w-full px-3 py-2 border rounded-md">

                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" name="lastName" value="{{ old('lastName') }}"
                                       class="w-full px-3 py-2 border rounded-md">

                                <label for="password">Password</label>
                                <input type="password" id="password" name="password"
                                       class="w-full px-3 py-2 border rounded-md">

                                <label for="address">Address</label>
                                <input type="text" id="address" name="address" value="{{ old('address') }}"
                                       class="w-full px-3 py-2 border rounded-md">

                                <label for="ZIP_code">ZIP Code</label>
                                <input type="text" id="ZIP_code" name="ZIP_code" value="{{ old('ZIP_code') }}"
                                       class="w-full px-3 py-2 border rounded-md">

                                <label for="city">City</label>
                                <input type="text" id="city" name="city" value="{{ old('city') }}"
                                       class="w-full px-3 py-2 border rounded-md">

                                <label for="country">Country</label>
                                <input type="text" id="country" name="country" value="{{ old('country') }}"
                                       class="w-full px-3 py-2 border rounded-md">

                                <label for="phone_number">Phone Number</label>
                                <input type="text" id="phone_number" name="phone_number"
                                       value="{{ old('phone_number') }}" class="w-full px-3 py-2 border rounded-md">

                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                       class="w-full px-3 py-2 border rounded-md">

                                <div class="flex justify-center space-x-4">
                                    <button type="reset"
                                            class="px-4 py-2 bg-gray-400 text-white rounded-lg hover:bg-gray-500">Cancel
                                    </button>
                                    <button type="submit"
                                            class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Save
                                        Changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
