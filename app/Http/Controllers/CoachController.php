<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
{
    $coachs =Coach::all();
    return view('coach.index', compact('Coachs'));
}

public function create()
{
    return view('coachs.create');
}

public function store(Request $request)
{
   Coach::create($request->all());
    return redirect('coach')->with('success', 'Coach created successfully.');
}

public function edit($id)
{
    $coach =Coach::findOrFail($id);
    return view('coach.edit', compact('Coach'));
}

public function update(Request $request, $id)
{
    $coach =Coach::findOrFail($id);
    $coach->update($request->all());
    return redirect('coach')->with('success', 'Coach updated successfully.');
}

public function destroy($id)
{
    $coach =Coach::findOrFail($id);
    $coach->delete();
    return redirect('coach')->with('success', 'Coach deleted successfully.');
}
}
