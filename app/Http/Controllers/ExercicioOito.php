<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioOito extends Controller
{
    public function tabuada(Request $request){
        $numero = $request->numero;
        $resultado = [];
        for($i = 0; $i <= 10; $i++){

            $multiplicacao = $i * $numero;

            array_push($resultado,$multiplicacao);
        }
        return [
            'success' => true,
            'resultado' => $resultado
        ];
    }

}
