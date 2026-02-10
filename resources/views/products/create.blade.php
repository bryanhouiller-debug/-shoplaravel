@extends('layouts.app')

@section('content')
<h1>Nouveau produit</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <label>Nom</label>
    <input type="text" name="name" value="{{ old('name') }}">

    <label>Description</label>
    <textarea name="description">{{ old('description') }}</textarea>

    <label>Prix</label>
    <input type="number" step="0.01" name="price" value="{{ old('price') }}">

    <label>Stock</label>
    <input type="number" name="stock" value="{{ old('stock', 0) }}">

    <label>
        <input type="checkbox" name="active" {{ old('active') ? 'checked' : '' }}>
        Actif
    </label>

    <button type="submit">Créer</button>
</form>
@endsection
