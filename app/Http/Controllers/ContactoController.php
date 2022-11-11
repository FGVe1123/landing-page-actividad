<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;


class ContactoController extends Controller
{
    public function contacto($codigo = null) {
     
        if(!empty($codigo) && $codigo == 1234){
            //$usuario_principal = $usuario[$codigo];
            $nombre = "Victor Flores";
            $correo = "victor@correotest.com";
            $comentario="Bienvenido";
            
        } else {
            //$usuario_principal = null;
            $nombre = " ";
            $correo = " ";
            $comentario=" ";
        }
    
        return view('contacto', compact('nombre', 'correo', 'comentario'));
    }



    
    public function recibeFormContacto (Request $request) {
        //se puede obtener la informacion del formulario

        $request->validate([
            'nombre' => ['required', 'max:255', 'min:2'],
            'correo' => ['required','email'],
            'comentario'=>['required', 'max:255', 'min:10'],
        ]);


       Contacto::create($request->all());
        //Crear modelo para el guardado de informacion

        return view('recibeFormContacto');
    }
}
