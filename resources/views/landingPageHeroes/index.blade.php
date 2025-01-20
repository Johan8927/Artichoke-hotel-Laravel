<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('title', 'Bienvenue sur Artichoke HotelSeeder')

@section('content')
    <div class="hero-section bg-cover bg-center h-screen relative" style="background-image: url('{{ asset('images/hotel-exterior.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex justify-center items-center h-full text-center text-white">
            <h1 class="text-5xl font-bold leading-tight">Bienvenue à l'Artichoke Hotel</h1>
            <p class="text-xl mt-4">Un séjour inoubliable au cœur des champs de lavande</p>
            <a href="#rooms" class="mt-6 px-8 py-3 bg-green-500 text-white rounded-full text-lg">Réservez maintenant</a>
        </div>
    </div>

    <div class="container mx-auto py-16 px-6" id="rooms">
        <h2 class="text-4xl font-bold text-center mb-8">Nos Chambres</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Exemple de carte de chambre -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/room-1.jpg') }}" alt="Chambre 1" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Chambre Deluxe</h3>
                    <p class="mt-4 text-gray-600">Profitez d'un confort optimal avec une vue magnifique.</p>
                    <a href="#" class="text-green-500 mt-4 inline-block">En savoir plus</a>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/room-2.jpg') }}" alt="Chambre 2" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Chambre Standard</h3>
                    <p class="mt-4 text-gray-600">Une chambre confortable pour des moments agréables.</p>
                    <a href="#" class="text-green-500 mt-4 inline-block">En savoir plus</a>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('images/room-3.jpg') }}" alt="Chambre 3" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold">Chambre Premium</h3>
                    <p class="mt-4 text-gray-600">Un luxe inégalé avec des équipements modernes.</p>
                    <a href="#" class="text-green-500 mt-4 inline-block">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-green-600 text-white py-16 px-6">
        <h2 class="text-4xl font-bold text-center mb-8">Nos Services</h2>
        <div class="flex justify-around">
            <div class="text-center">
                <i class="fas fa-spa text-5xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Bien-être</h3>
                <p>Un spa et des soins pour une relaxation totale.</p>
            </div>
            <div class="text-center">
                <i class="fas fa-utensils text-5xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Restauration</h3>
                <p>Des plats raffinés pour tous les goûts.</p>
            </div>
            <div class="text-center">
                <i class="fas fa-swimming-pool text-5xl mb-4"></i>
                <h3 class="text-2xl font-semibold">Piscine</h3>
                <p>Une piscine extérieure avec vue.</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto py-16 px-6">
        <h2 class="text-4xl font-bold text-center mb-8">Dernières Nouvelles</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($news as $new)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/'.$new->image) }}" alt="{{ $new->title }}" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold">{{ $new->title }}</h3>
                        <p class="mt-4 text-gray-600">{{ Str::limit($new->content, 100) }}</p>
                        <a href="{{ route('news.show', $new->id) }}" class="text-green-500 mt-4 inline-block">Lire la suite</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
