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
        $conferencias  = [
            [
                'id' =>1,
                'titulo' => "Bienvenida",
                'url' =>"bienvenida",
                'imagen' => "/images/normal/bienvenida.png",
                'ponente' =>"Equipo Blendiberia",
                'perfil' => "/images/svg/icono_home.svg",
                'descripcion_reducida' =>"Después de varios años vuelve la Bliendiberia en formato presencial, con un Blender más introducido en la industria audiovisual y cada versión con más usuarios y estudios usando Blender",
                'descripcion' =>"Después de varios años vuelve la Bliendiberia en formato presencial, con un Blender más introducido en la industria audiovisual y cada versión con más usuarios y estudios usando Blender",

            ],
            [
                'id' =>2,
                'titulo' => " Iluminación en Blender: Fundamentos para la Creación de Escenas",
                'url' =>"iluminacion-en-blender-fundamentos-para-la-creacion-de-escenas",
                'imagen' => "/images/normal/alex-trevino-medmain.jpg",
                'ponente' =>"Alex Treviño",
                'perfil' => "/images/ponentes/Alex.png",
                'descripcion_reducida' =>"En esta charla profundizaremos en los fundamentos de la iluminación aplicados en Blender, un aspecto crucial para crear escenas 3D atractivas.",
                'descripcion' => "En esta charla profundizaremos en los fundamentos de la iluminación aplicados en Blender, un aspecto crucial para crear escenas 3D atractivas. Aprende a manipular la calidad de la luz, la temperatura y los diferentes roles de la luz para lograr atmósferas específicas. Esta charla te equipará con las herramientas y conocimientos necesarios para mejorar la técnica de iluminación en Blender."
            ],
            [
                'id' =>3,
                'titulo' => "Blender en el Mundo de la Publicidad",
                'url' => "blender-en-el-mundo-de-la-publicidad",
                'imagen' => "/images/normal/publicidad.webp",
                'ponente' =>"Alex Baeza",
                'perfil' => "/images/svg/icono_home.svg",
                'descripcion_reducida' => "Cada día son más las empresas de Publicidad que también usan Blender para crear espacios publicitarios y experiencias virtuales para sus usuarios.",
                'descripcion' =>"Cada día son más las empresas de Publicidad que también usan Blender para crear espacios publicitarios y experiencias virtuales para sus usuarios. Pasando por nuevos flujos de trabajo, hasta llegar a crear experiencias las cuales cambiarán cómo se mueve el mercado nacional e internacional de los próximos años. Podremos aprender de estas nuevas tendencias y poder aplicarlas a nuestros areas ya que es el principio de estos usos de nuevas tecnologías, todo desde la visión de profesionales del sector."

            ],
            [
                'id' => 4,
                'titulo' => "Blender sobre todo lo demás",
                'url' => "blender-sobre-todo-lo-demas",
                'imagen' => "/images/normal/publicidad.png",
                'ponente' =>"Irene Arnaiz",
                'perfil' => "/images/ponentes/Irene.png",
                'descripcion_reducida' =>"¿Por qué para vfx me parece que Blender es una gran herramienta?,  voy a mostrar las ventajas que tiene de cara a una producción, con el uso de herramientas nativas, o addons especificos.",
                'descripcion' =>"¿Por qué para vfx me parece que Blender es una gran herramienta?,  voy a mostrar las ventajas que tiene de cara a una producción, con el uso de herramientas nativas, o addons especificos."

            ],
            ];

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
