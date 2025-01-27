<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Hero</title>
    <!-- Inclusion de la feuille de styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <!-- En-tête de la page -->
    <h1>Landing Page Hero</h1>
</header>

<main>
    <h2>Bienvenue sur la page hero !</h2>

    <!-- Section pour les héros -->
    @if($landingPageHeroes->isNotEmpty())
        <h3>Héros :</h3>
        <ul>
            @foreach($landingPageHeroes as $hero)
                <li>{{ $hero->title }} : {{ $hero->description }}</li>
            @endforeach
        </ul>
    @else
        <p>Aucun héros à afficher.</p>
    @endif

    <!-- Section pour les chambres -->
    @if($rooms->isNotEmpty())
        <h3>Chambres :</h3>
        <ul>
            @foreach($rooms as $room)
                <li>{{ $room->name }} : {{ $room->description }}</li>
            @endforeach
        </ul>
    @else
        <p>Aucune chambre à afficher.</p>
    @endif

    <!-- Section pour les actualités -->
    @if($news->isNotEmpty())
        <h3>Actualités :</h3>
        <ul>
            @foreach($news as $newsItem)
                <li>{{ $newsItem->title }} : {{ $newsItem->content }}</li>
            @endforeach
        </ul>
    @else
        <p>Aucune actualité à afficher.</p>
    @endif

    <!-- Image principale -->
    @if($heroPicture)
        <h3>Image principale :</h3>
        <img src="{{ asset('storage/' . $heroPicture->path) }}" alt="{{ $heroPicture->name }}">
    @else
        <p>Pas d'image principale disponible.</p>
    @endif
</main>

<footer>
    <!-- Pied de page -->
    <p>&copy; 2025 Artichoke Hotel</p>
</footer>
</body>
</html>
