<?php

use App\Http\Controllers\PruebaController;
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


Route::get('/landingpage', [PruebaController::class, 'landingpage']);

Route::get('/contacto/{codigo?}', [PruebaController::class, 'contacto']);

Route::post('/recibeFormContacto', [PruebaController::class, 'recibeFormContacto']);


