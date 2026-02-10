<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function show($id)
    {
        return "Détails du produit n°{$id}";
    }
    public function index()
{
    $products = [
        ['id' => 1, 'name' => 'T-shirt Laravel', 'price' => 25],
        ['id' => 2, 'name' => 'Mug PHP', 'price' => 15],
        ['id' => 3, 'name' => 'Sticker Blade', 'price' => 5],
        ['id' => 4, 'name' => 'Hoodie Laravel', 'price' => 60],
        ['id' => 5, 'name' => 'Livre Laravel', 'price' => 45],
    ];
    $products = Product::all();
    return view('products.index', compact('products'));
}

}
