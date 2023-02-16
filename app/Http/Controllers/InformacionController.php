<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function carreras(){
        return view('Informacion.carrerastecnicas');
    }

    public function reglamento(){
        return view('Informacion.reglamento');
    }
}
