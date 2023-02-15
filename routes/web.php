<?php

namespace App\Http\Controllers;
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

Route::get('canciones/{id?}', [PaginasController::class, 'canciones']);
Route::get('contacto', [PaginasController::class, 'contacto']);
Route::post('contacto', [PaginasController::class, 'postContacto']);

// Route::get('/canciones/{id?}', function ($id = null) {
//     $canciones = [];
//     $canciones[] = [
//         'nombre' => 'Let it be', 
//         'artista' => 'John Lennon'
//     ];
//     $canciones[] = ['nombre' => 'Andromeda', 'artista' => 'Zoe'];


//     if(!is_null($id)){
//         $cancion = $canciones[$id];
//     }else{
//         $cancion = null;
//     }

//     return view('canciones', compact('canciones', 'cancion'));
    
// });






// Route::get('/arreglo-canciones', [CancionController::class, 'arreglo']); 
// {{ dd($canciones); }}