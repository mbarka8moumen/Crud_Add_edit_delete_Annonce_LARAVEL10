@extends('layouts.app')

@section('title', 'Détails de l\'annonce')

@section('content')
    <h1>{{ $annonce->titre }}</h1>
    <p><strong>Description:</strong> {{ $annonce->description }}</p>
    <p><strong>Type:</strong> {{ $annonce->type }}</p>
    <p><strong>Ville:</strong> {{ $annonce->ville }}</p>
    <p><strong>Superficie:</strong> {{ $annonce->superficie }} m²</p>
    <p><strong>Neuf:</strong> {{ $annonce->neuf ? 'Oui' : 'Non' }}</p>
    <p><strong>Prix:</strong> {{$annonce->prix}} MAD</p>

    <a href="{{ route('annonces.index') }}" class="btn btn-secondary">Retour</a>
    <a href="{{ route('annonces.edit', $annonce->id) }}" class="bg-transparent border-none p-0">
                            <img src="{{ asset('./icons/edit.png') }}" alt="Edit" class="w-6 h-6 hover:opacity-75">
                                                    </a>
    <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" onclick="return confirm('Confirmer la suppression ?')" class="bg-transparent border-none p-0">
                                    <img src="{{ asset('./icons/delete.png') }}" alt="Supprimer" class="w-6 h-6 hover:opacity-75">
                                            </button>
    </form>
@endsection
