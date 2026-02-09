<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'ShopLaravel')</title>
</head>
<body>

<header>
    <nav>
        <a href="/">Accueil</a>
        <a href="/about">À propos</a>
        <a href="/contact">Contact</a>
        <a href="/products">Produits</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    © {{ date('Y') }} ShopLaravel
</footer>

</body>
</html>
