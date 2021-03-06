@extends('app')

@section('title', $title)
@section('style')
    @parent
    <link rel="stylesheet" href="/css/style.css">
@endsection

@section('content')

    <form method="post">
        @csrf
        <div>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <input type="number" name="lower_limit" id="lower_limit">
        </div>
        <div>
            <input type="number" name="upper_limit" id="upper_limit">
        </div>
        <div>
            <button type="submit">Chercher</button>
        </div>
    </form>

    <table class="">
    @foreach ($produits as $produit)
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
        </tr>
        <tr>
            <td>{{ $produit->nom }}</td>
            <td>{{ $produit->description }}</td>
            <td>{{ $produit->prix }}</td>
        </tr>
    @endforeach
    </table>

@endsection