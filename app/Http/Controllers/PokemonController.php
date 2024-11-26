<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
{
    $pokemons = Pokemon::all();
    return view('pokemon.index', compact('Pokemons'));
}

public function create()
{
    return view('pokemons.create');
}

public function store(Request $request)
{
    Pokemon::create($request->all());
    return redirect('pokemon')->with('success', 'Pokemon created successfully.');
}

public function edit($id)
{
    $pokemon = Pokemon::findOrFail($id);
    return view('pokemon.edit', compact('Pokemon'));
}

public function update(Request $request, $id)
{
    $pokemon = Pokemon::findOrFail($id);
    $pokemon->update($request->all());
    return redirect('pokemon')->with('success', 'Pokemon updated successfully.');
}

public function destroy($id)
{
    $pokemon = Pokemon::findOrFail($id);
    $pokemon->delete();
    return redirect('pokemon')->with('success', 'Pokemon deleted successfully.');
}
}
