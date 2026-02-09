<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}
public function home();
{
    $shop = [
        'name' => 'ShopLaravel',
        'products' => 42,
        'open' => true,
    ];

    return view('home', [
        'shop' => $shop
    ]);
}
}

