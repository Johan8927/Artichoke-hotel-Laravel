<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Hero</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <h1>Landing Page Hero</h1>
</header>

<main>
    <p>Bienvenue sur la page hero !</p>
    <!-- Affichez les données si nécessaire -->
    @if(!empty($data))
        <ul>
            @foreach($data as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>Aucune donnée à afficher.</p>
    @endif
</main>

<footer>
    <p>&copy; 2025 Artichoke Hotel</p>
</footer>
</body>
</html>
