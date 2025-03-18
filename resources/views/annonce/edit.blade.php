@extends('layouts.app')

@section('title', 'Modifier l\'annonce')

@section('content')
    <h1>Modifier l'annonce</h1>
    @isset($annonce)
    <form method="POST" action="{{ route('annonces.update', $annonce->id) }}">
        @csrf

        <label>Titre :</label>
        <input type="text" name="titre" value="{{ $annonce->titre }}" class="form-control" required>

        <label>Description :</label>
        <textarea name="description" class="form-control">{{ $annonce->description }}</textarea>

        <label>Type :</label>
        <select name="type" class="form-control">
            <option {{ $annonce->type == 'Appartement' ? 'selected' : '' }}>Appartement</option>
            <option {{ $annonce->type == 'Maison' ? 'selected' : '' }}>Maison</option>
            <option {{ $annonce->type == 'Villa' ? 'selected' : '' }}>Villa</option>
            <option {{ $annonce->type == 'Magasin' ? 'selected' : '' }}>Magasin</option>
            <option {{ $annonce->type == 'Terrain' ? 'selected' : '' }}>Terrain</option>
        </select>

        <label>Ville :</label>
        <input type="text" name="ville" value="{{ $annonce->ville }}" class="form-control">

        <label>Superficie :</label>
        <input type="number" name="superficie" value="{{ $annonce->superficie }}" class="form-control">

        <label>Neuf :</label>
        <select name="neuf" class="form-control">
            <option value="1" {{ $annonce->neuf ? 'selected' : '' }}>Oui</option>
            <option value="0" {{ !$annonce->neuf ? 'selected' : '' }}>Non</option>
        </select>

        <label>Prix :</label>
        <input type="number" step="0.01" name="prix" value="{{ $annonce->prix }}" class="form-control">

        <button type="submit" class="btn btn-success mt-3">Mettre à jour</button>
        <a href="{{ route('annonces.index') }}" class="btn btn-secondary mt-3">Annuler</a>
    </form>
@endsection
