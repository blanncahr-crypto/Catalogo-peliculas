<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // Obtener todas las películas
    public function index()
    {
        $movies = Movie::all(); // Obtiene todos los registros
        return response()->json($movies);
    }

    // Obtener una película por ID
    public function show($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['message' => 'Película no encontrada'], 404);
        }

        return response()->json($movie);
    }
    public function update(Request $request, $id)
{
    $movie = Movie::find($id);

    if (!$movie) {
        return response()->json(['message' => 'Película no encontrada'], 404);
    }

    $movie->update($request->all());

    return response()->json(['message' => 'Película actualizada', 'data' => $movie], 200);
}

public function destroy($id)
{
    $movie = Movie::find($id);

    if (!$movie) {
        return response()->json(['message' => 'Película no encontrada'], 404);
    }

    $movie->delete();

    return response()->json(['message' => 'Película eliminada'], 200);
}
}
