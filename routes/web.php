<?php

use App\Http\Controllers\CoachController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PokemonController;

Route::get('pokemon', [PokemonController::class, 'index']);
Route::get('pokemon/create', [PokemonController::class, 'create']);
Route::post('pokemon', [PokemonController::class, 'store']);
Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit']);
Route::put('pokemon/{id}', [PokemonController::class, 'update']);
Route::delete('pokemon/{id}', [PokemonController::class, 'destroy']);


Route::get('coach', [CoachController::class, 'index']);
Route::get('coach/create', [CoachController::class, 'create']);
Route::post('coach', [PokemonController::class, 'store']);
Route::get('coach/{id}/edit', [CoachController::class, 'edit']);
Route::put('coach/{id}', [CoachController::class, 'update']);
Route::delete('coach/{id}', [CoachController::class, 'destroy']);
