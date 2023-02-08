<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/canciones', function () {
//     $canciones = [];
//     $canciones[] = [
//         'nombre' => 'Hola', 
//         'artista' => 'yo'];
//     $canciones[] = [
//         'nombre' => 'adios', 
//         'artista' => 'tu'];


//     return view('/canciones', ['canciones' => $canciones]);
    
// });

Route::get('/canciones/{id}', function ($id) {
    $canciones = [];
    $canciones[] = [
        'nombre' => 'Hola', 
        'artista' => 'yo'];
    $canciones[] = [
        'nombre' => 'adios', 
        'artista' => 'tu'];

    $song = $canciones[$id];

    return view('/canciones', ['canciones' => $song]);
    
});






// Route::get('/arreglo-canciones', [CancionController::class, 'arreglo']); 
// {{ dd($canciones); }}