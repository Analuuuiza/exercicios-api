<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioCinco extends Controller
{
    public function verificar(Request $request){
        if($request->numero % 4 == 0){
        return json_encode([
            'mensagem' => 'divisivel'
        ]);
    } else {
        return json_encode([
            'mensagem' => 'indivisivel'
        ]);
    }

}
}
