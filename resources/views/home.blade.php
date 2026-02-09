<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>

    <h1>Bienvenue sur ShopLaravel 🛒</h1>

    <p>
        Cette boutique est un projet d’apprentissage avec Laravel et Blade.
    </p>
<h1>{{ $shop['name'] }}</h1>

<p>Nombre de produits : {{ $shop['products'] }}</p>

@if ($shop['open'])
    <p>🟢 La boutique est ouverte</p>
@else
    <p>🔴 La boutique est fermée</p>
@endif

@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1>Bienvenue sur ShopLaravel</h1>
    <p>La meilleure boutique Laravel 🚀</p>
@endsection

</body>
</html>
