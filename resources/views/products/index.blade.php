@extends('layouts.app')

@section('title', 'Produits')

@section('content')
    <h1>Liste des produits</h1>

    <ul>
        @forelse ($products as $product)
            <li>
                {{ $loop->iteration }} —
                {{ $product['name'] }} :
                {{ $product['price'] }} €
            </li>
        @empty
            <li>Aucun produit disponible.</li>
        @endforelse
    </ul>
@endsection
