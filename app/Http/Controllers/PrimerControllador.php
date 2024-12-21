<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class PrimerControllador extends Controller{
        function index($nombre = "No hay nombre", $apellidos = "No hay apellidos"){
            return view('paramOp', [
                'nombre' => $nombre,
                "apellidos" => $apellidos
            ]);
        }
    }
?>
