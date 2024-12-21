<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Ruta con blade
Route::get("/testBlade", function (){
   return view('test');
});
//Ruta con contenido html
Route::get("/testBasico", function (){
    return "<h2>Esta es una ruta basica que retorna html</h2>";
});

//Ruta con parametros obligatorios
Route::get("/parametrosObligatorios/{nombre}/{apellidos}", function ($nombre, $apellidos){
   return view('parametrosObligatorios', [
       "nombre" => $nombre,
       "apellidos" => $apellidos
   ]);
});

//Ruta con parametros opcionales
Route::get("/paramOp/{nombre?}/{apellidos?}", function ($nombre = "No hay", $apellidos = "No hay"){
   return view("paramOp", [
       "nombre" => $nombre,
       "apellidos" => $apellidos
   ]);
});
