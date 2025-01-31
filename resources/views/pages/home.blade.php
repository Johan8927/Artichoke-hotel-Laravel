@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <!-- Barre de navigation avec Login et Register -->
        <nav class="flex justify-between items-center py-4">
            <h1 class="text-2xl font-bold">Bienvenue sur notre site !</h1>
            <div>
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg mr-2">Login</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-green-500 text-white rounded-lg">Register</a>
                @endif
            </div>
        </nav>

        <!-- Section Héros -->
        <section class="mt-8">
            <h2 class="text-xl font-bold mb-4">Héros</h2>
            @if($heroes->isNotEmpty())
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Nom</th>
                        <th class="border border-gray-300 px-4 py-2">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($heroes as $hero)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $hero->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $hero->description }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Aucun héros disponible.</p>
            @endif
        </section>

        <!-- Section Commodités (Amenities) -->
        <section class="mt-8">
            <h2 class="text-xl font-bold mb-4">Commodités</h2>
            @if($amenities->isNotEmpty())
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Nom</th>
                        <th class="border border-gray-300 px-4 py-2">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($amenities as $amenity)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $amenity->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $amenity->description }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Aucune commodité disponible.</p>
            @endif
        </section>

        <!-- Section Actualités (News) -->
        <section class="mt-8">
            <h2 class="text-xl font-bold mb-4">Actualités</h2>
            @if($news->isNotEmpty())
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Titre</th>
                        <th class="border border-gray-300 px-4 py-2">Contenu</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $article)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $article->title }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $article->content }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>Aucune actualité disponible.</p>
            @endif
        </section>
    </div>
@endsection
