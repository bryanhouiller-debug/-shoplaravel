<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Méthode pour afficher un produit par son ID
    public function show($id)
    {
        return "Détails du produit n°$id";
    }
     public function index()
     {
       // 1️⃣ Créer un tableau de produits fictifs
        $products = [
            ['id' => 1, 'name' => 'T-shirt Laravel', 'price' => 29.99],
            ['id' => 2, 'name' => 'Casquette PHP', 'price' => 19.99],
            ['id' => 3, 'name' => 'Hoodie Blade', 'price' => 49.99],
            ['id' => 4, 'name' => 'Sac Eloquent', 'price' => 39.99],
            ['id' => 5, 'name' => 'Mug Artisan', 'price' => 9.99],
        ];

        // 2️⃣ Retourner la vue 'products.index' en passant le tableau
        return view('products.index', compact('products'));
        // compact('products') crée ['products' => $products]
     }
        
    
}
