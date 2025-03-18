<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;

class AnnonceController extends Controller
{

    public function index()
    {
        $annonces = Annonce::all();
        return view('annonce.index', compact('annonces'));
    }

  
    public function create()
    {
        return view('annonce.create');
    }

   
    public function store(Request $request)
    {
        Annonce::create($request->all());
        return redirect('/annonces')->with('success', 'Annonce ajoutée avec succès');
    }

    public function show($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('annonce.show', compact('annonce'));
    }

    
    public function edit($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('annonce.edit', compact('annonce'));
    }

   
    public function update(Request $request, $id)
    {
        $annonce = Annonce::findOrFail($id);
        $annonce->update($request->all());
        return redirect('/annonces')->with('success', 'Annonce mise à jour');
    }

    
    public function destroy($id)
    {
        $annonce = Annonce::findOrFail($id);
        $annonce->delete();
        return redirect('/annonces')->with('success', 'Annonce supprimée');
    }
}

