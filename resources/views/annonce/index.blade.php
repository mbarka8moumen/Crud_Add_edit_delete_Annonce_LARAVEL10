@extends('layouts.app')

@section('title', 'Liste des annonces')

@section('content')
<h1 class="text-4xl font-bold text-gray-800 text-center my-6">
    Liste des annonces
</h1>
    <a href="{{ route('annonces.create') }}" class="btn btn-primary">Nouvelle annonce</a>
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Type</th>
                <th>Ville</th>
                <th>Superficie</th>
                <th>Prix</th>
                <th>etat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($annonces as $annonce)
                <tr>
                    <td>{{ $annonce->titre }}</td>
                    <td>{{ $annonce->type }}</td>
                    <td>{{ $annonce->ville }}</td>
                    <td>{{ $annonce->superficie }} m²</td>
                    <td>{{ $annonce->prix }} MAD</td>
                    <td>{{ $annonce->neuf }}</td>
                    <td>
                    
                        

                    <a href="{{ route('annonces.show', $annonce->id) }}" class="bg-transparent border-none p-0">
                            <img src="{{ asset('./icons/detail.png') }}" alt="Edit" class="w-6 h-6 hover:opacity-75">
                                                    </a>


                        <a href="{{ route('annonces.edit', $annonce->id) }}" class="bg-transparent border-none p-0">
                            <img src="{{ asset('./icons/edit.png') }}" alt="Edit" class="w-6 h-6 hover:opacity-75">
                                                    </a>

                                                    <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST" style="display:inline;">
                                @csrf
                                            @method('DELETE')
                                                <button type="submit" onclick="return confirm('Confirmer la suppression ?')" class="bg-transparent border-none p-0">
                                    <img src="{{ asset('./icons/delete.png') }}" alt="Supprimer" class="w-6 h-6 hover:opacity-75">
                                            </button>
                                                </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
