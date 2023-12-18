<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalesController extends Controller
{
    public function getAnimales(){
        $animales = ['Leon', 'Chimuelo', 'Sesar', 'Bimba'];

        return response()->json(['mensaje' => 'Todos mis animales', 'datos' => $animales]);
    }
}
