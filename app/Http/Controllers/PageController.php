<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
{
    $url = route('products.show', ['id' => 5]);

    return "Bienvenue sur ShopLaravel 🎉<br>
            Voir le produit : {$url}";
     return view('home');
}



}


