@extends('layouts.app')

@section('title', 'Produits - ShopLaravel')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Nos produits</h1>

    <!-- 1️⃣ Boucle @forelse pour afficher les produits -->
    <div class="grid grid-cols-3 gap-4">
        @forelse($products as $product)
            <div class="bg-white rounded-lg shadow p-4">
                <h3 class="font-bold">{{ $product['name'] }}</h3>
                <p>Prix : {{ $product['price'] }} €</p>
                <a href="{{ route('products.show', ['id' => $product['id']]) }}" 
                   class="text-blue-500 hover:underline">
                    Voir le produit
                </a>
            </div>
        @empty
            <p>Aucun produit trouvé.</p>
        @endforelse
    </div>
@endsection
