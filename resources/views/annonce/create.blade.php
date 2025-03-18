@extends('layouts.app')

@section('content')
    <h1>Ajouter une annonce</h1>
    <form method="POST" action="{{ route('annonces.store') }}">
        @csrf
        <label>Titre :</label>
        <input type="text" name="titre" class="form-control" required>
        
        <label>Description :</label>
        <textarea name="description" class="form-control"></textarea>
        
        <label>Type :</label>
        <select name="type" class="form-control">
            <option>Appartement</option>
            <option>Maison</option>
            <option>Villa</option>
            <option>Magasin</option>
            <option>Terrain</option>
        </select>
        
        <label>Ville :</label>
        <input type="text" name="ville" class="form-control">
        
        <label>Superficie :</label>
        <input type="number" name="superficie" class="form-control" required>
        
        <label>Neuf :</label>
        <select name="neuf" class="form-control">
            <option value="1">Oui</option>
            <option value="0">Non</option>
        </select>
        
        <label>Prix :</label>
        <input type="number" step="0.01" name="prix" class="form-control">
        
        <button type="submit" class="btn btn-success mt-3">Ajouter</button>
    </form>
@endsection
