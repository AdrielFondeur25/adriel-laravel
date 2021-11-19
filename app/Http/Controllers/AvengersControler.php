<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvengersControler extends Controller
{
    //
    public function Guardar(Request $request){
        $avengers = new Avengers;
        $avengers->nombres = $request->nombres;
        $avengers->apellidos = $request->apellidos;
        $avengers->correo = $request->correo;
        $avengers->numero = $request->numero;
        $avengers->contrasena = $request->contrasena;
    
        $avengers->save();
    // $avengers = Avengers::all();
        return http_redirect("rafe");

    }
}
