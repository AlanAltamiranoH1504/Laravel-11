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

//Ruta contact1
Route::get("/contact1/{nombre?}/{ciudad?}", function ($nombre = "No hay nombre", $ciudad = "No hay ciudad"){
    return redirect()->route("contact2");
})->name("contact1");

//Ruta contact2
Route::get("/contact2/{nombre?}/{ciudad?}", function ($nombre = null, $ciudad = null){
    $paises  = ['Mexico', 'EUA', 'Canada', 'Alemania'];
   return view('contact2', compact('nombre', 'ciudad', 'paises'));
})->name('contact2');

//Ruta para prueba de los leyouts
Route::get("/pruebaLayOut", function (){
    return view("pruebaLayOut");
});
Route::get("/layOut2", function (){
    return view("pruebaLayOut2");
});

//Ruta para un controlador
Route::get("/primerControlador/{nombre?}/{apellidos?}", [\App\Http\Controllers\PrimerControllador::class, 'index']);
Route::resource("productos", \App\Http\Controllers\ResourceController::class);
