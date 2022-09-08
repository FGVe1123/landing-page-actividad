<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('landingpage', function () {
    return view('/landingpage');
});


Route::get('contacto/{codigo?}', function ($codigo = null) {
 
    if(!empty($codigo) && $codigo == 1234){
        //$usuario_principal = $usuario[$codigo];
        $nombre = "victor ";
        $correo = "correo@correo";
        
        
    } else {
        //$usuario_principal = null;
        $nombre = " ";
        $correo = " ";
    }

    return view('/contacto', compact('nombre', 'correo'));
});
