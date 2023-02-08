<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancionController extends Controller
{
    public function arreglo()
    {
        $canciones = [
            [
                'nombre' => 'let it be',
                'artista' => 'John',
            ],
            [
                'nombre' => 'andromeda',
                'artista' => 'Zoe',
            ],
            [
                'nombre' => 'august',
                'artista' => 'Taylor',
            ]
        ];
        return view('arreglo-canciones', ['canciones' => $canciones]);
    }
}
