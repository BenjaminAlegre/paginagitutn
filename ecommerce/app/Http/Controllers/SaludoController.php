<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludoBasico() {
        return "Hola";
    }

    public function saludoCombinado($nombre, Request $request) {
        return "Hola ".$nombre." ".$request->get('apellido');
    }
}
