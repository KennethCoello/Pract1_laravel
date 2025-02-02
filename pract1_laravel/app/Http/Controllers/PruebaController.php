<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function pruebaSimple(Request $request){
    return response('Mensaje de la respuesta', 201);
    }

    public function pruebaConCabeceras(Request $request){
    return response('Mensaje de la respuesta', 201)
    ->header('Cabecera1', 'Valor1')
    ->header('Cabecera2', 'Valor2');
    }

    public function pruebaConView(Request $request){
    return response(view('inicio'), 201);
    }

    public function pruebaRedireccion(Request $request){
    return redirect('/');
    }

    public function pruebaRedireccionConRoute(Request $request){
    return redirect()->route('prueba');
    }
}
