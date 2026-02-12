<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        //  Créer un tableau associatif avec des informations sur la boutique
        $shopInfo = [
            'name' => 'ShopLaravel',
            'products_count' => 120,
            'is_open' => true
        ];

        //  Retourner la vue 'home' en passant le tableau à la vue
        return view('home', ['shop' => $shopInfo]);
         // Générer l'URL du produit avec l'ID 42
    $productUrl = route('products.show', ['id' => 42]);

    return "Bienvenue sur ma boutique ShopLaravel  <br>
            Voir le produit 42 ici : <a href='$productUrl'>$productUrl</a>";
             return view('home');
    }
   
    public function about()
    {
        return "ShopLaravel est une boutique en ligne spécialisée dans les produits high-tech.";
    }
}


