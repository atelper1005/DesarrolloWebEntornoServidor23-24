<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Solo un metodo
    public function __invoke() {

        $clientes = [
            [
                'id' => 1, 
                'nombre' => "Juan Carlos",
            ],
            [
                'id' => 2, 
                'nombre' => "Antonio",
            ],
            [
                'id' => 3, 
                'nombre' => "Dani",
            ]
        ];

        $autor = 'Antonio Jesús';
        $curso = '23/24';
        $modulo = 'DWES';
        $nivel = 2;

        return view('home.index', compact('autor', 'curso', 'modulo', 'nivel', 'clientes'));
    }
}
