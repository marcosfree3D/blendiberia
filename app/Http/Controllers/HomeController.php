<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;

class HomeController extends Controller
{
    public function index()
    {
        $conferencias = DB::select('select * from conferencias');
        $talleres  = [
            [
                'id' =>1,
                'titulo' => "Creación de Addons para Blender",
                'url' => "creacion-de-adons-para-blender",
                'imagen' => "/images/normal/deportivas.jpg",
                'tallerista' =>"Zebus3D - TebitoSan",
                'perfil' => "/images/ponentes/zebustebito.png",
                'descripcion_reducida' =>"En este taller veremos como una empresa española ha desarrollado tres addons muy potentes para Blender y los está vendiendo en el BlenderMarket...",
                'descripcion' =>"En este taller veremos como una empresa española ha desarrollado tres addons muy potentes para Blender y los está vendiendo en el BlenderMarket. Además veremos también los principios básicos de creación de un addon, para que si lo necessitas puedas crearte los tuyos propios",

            ],
            [
                'id' =>2,
                'titulo' => "Introducción a Procedural y Geometry Nodes",
                'url' => 'introduccion-a-procedural-y-geometry-nodes',
                'imagen' => "/images/normal/Alex_Baeza_Str3dlok_fondo_2.png",
                'tallerista' =>"Alex Baeza",
                'perfil' => "/images/ponentes/AlexBaeza.png",
                'descripcion_reducida' =>"Introducción y acercamiento a flujos de trabajo optimizados y procedurales para mejorar nuestra manera de trabajar, haciéndola más rápida y eficiente. ",
                'descripcion' =>"Introducción y acercamiento a flujos de trabajo optimizados y procedurales para mejorar nuestra manera de trabajar, haciéndola más rápida y eficiente. Además, ejercicios prácticos para todos los públicos y niveles donde podrán crear su primera herramienta procedural en directo con ayuda de profesionales técnicos. Gracias a estos nuevas metodologías y flujos de trabajo, todos nuestros proyectos podrán verse beneficiados de estas técnicas y tecnologías",

            ],
        ];
        $ponentes = DB::select('select * from ponentes');
        /*$ponentes = DB::select('select * from ponentes '); */


        return view('principal',compact('conferencias','ponentes','talleres'));
    }
}
