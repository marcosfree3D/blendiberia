<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function index()
    {
        return view('registro');
    }
    public function store(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $comentarios = $request->input('comentarios');
        $personas = $request->input('personas');

        if($request->input('interes_blendiberia')=="si"){
            $interes_blendiberia = true;
        } else{
            $interes_blendiberia= false;
        }
        if($request->input('interes_talleres')=="si"){
            $interes_talleres = true;
        } else{
            $interes_talleres= false;
        }
        if($request->input('aeub')=="si"){
            $aeub = true;
        } else{
            $aeub= false;
        }
        if($request->input('politica')=="si"){
            $politica = true;
        } else{
            $politica= false;
        }
        DB::insert('insert into registros (nombre, email, comentarios, personas, blendiberia, talleres, aeub, acepto_politica_privacidad)
         values (?,?,?,?,?,?,?,?)',
         [$nombre,$email,$comentarios, $personas, $interes_blendiberia, $interes_talleres, $aeub, $politica]);
        return("Ya has sido registrado, gracias por tu colaboración");

    }
}
