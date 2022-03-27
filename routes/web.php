<?php

use Illuminate\Support\Facades\Route;
//invocar el controlador desde su ruta
use App\Http\Controllers\miprimerController;
use App\Http\Controllers\heladosController;
use App\Http\Controllers\precioController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\docenteController;
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

Route::get('/', function () {
    return view('welcome');
});
//Lo primero es nombrar la ruta entre comillas simples con el nombre que desee darle, LUego va la coma, seguido de la funcion y el return
Route::get('/miprimeraruta', function(){
    return 'Hola mamallema, estoy aprendiendo laravel';
});

/*
Los parametros son muy importantes en las rutas y las paginas web, y los indicamos entre llaves{}
Los parametros van dentro de las misma ruta mamallema
*/

Route::get('/minombre/{nombre}', function($nombre){
    return 'Hola soy '. $nombre;
});

Route::get('/suma/{num}/{num2}', function($num,$num2){
    return 'El resultado de la suma es '. $num+$num2;

});

Route::get('abichuelo/{a}/{b}',[miprimerController::class,'suma']);
Route::get('abichuelo2/{a}',[miprimerController::class,'carrera']);

/*
La clase va igual que el metodo entre corchetes o parentesis cuadrados. La clase va acompañada
de ::class,  y el metodo tiene que llamarse igual a como esta en la clase y entre comillas
*/

Route::get('abichuelo3/{opcion}',[heladosController::class,'helado']);
Route::get('abichuelo4/{precio}',[precioController::class,'precio']);
Route::get('iva/{nom}/{ps}',[precioController::class,'getiva']);

Route::resource('cursos',cursoController::class);
Route::resource('docentes',docenteController::class);
