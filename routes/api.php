<?php
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/movies', [MovieController::class, 'index']); // Obtener todas las películas
Route::get('/movies/{id}', [MovieController::class, 'show']); // Obtener una película por ID

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;

//Route::middleware('api')->get('/test', function () {
    //return response()->json(['message' => 'API funcionando correctamente']);
//});
