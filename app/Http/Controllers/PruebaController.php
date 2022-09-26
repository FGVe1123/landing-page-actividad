<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{

        public function contacto($codigo = null) {
     
            if(!empty($codigo) && $codigo == 1234){
                //$usuario_principal = $usuario[$codigo];
                $nombre = "victor ";
                $correo = "correo@correo";
                
                
            } else {
                //$usuario_principal = null;
                $nombre = " ";
                $correo = " ";
            }
        
            return view('contacto', compact('nombre', 'correo'));
        }
    
    
    
        public function landingpage (){
            return view('landingpage');
            }

        
        public function recibeFormContacto (Request $request) {
            //se puede obtener la informacion del formulario

            

            $request->validate([
                'nombre' => ['required', 'max:255', 'min:2'],
                'correo' => ['required','email'],
                'comentario' => 'required'
            ]);

            return view('recibeFormContacto');
        }
       
    
    
}
