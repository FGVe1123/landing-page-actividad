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
            
            
        } else {
            //$usuario_principal = null;
            $nombre = " ";
            $correo = " ";
        }
    
        return view('contacto', compact('nombre', 'correo'));
    }



    
    public function recibeFormContacto (Request $request) {
        //se puede obtener la informacion del formulario

        $request->validate([
            'nombre' => ['required', 'max:255', 'min:2'],
            'correo' => ['required','email'],
            'comentario' => 'required'
        ]);


       Contacto::create($request->all());
        //Crear modelo para el guardado de informacion

        return view('recibeFormContacto');
    }
}
