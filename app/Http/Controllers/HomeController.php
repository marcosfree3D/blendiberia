<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class HomeController extends Controller
{
    public function index()
    {
        $conferencias  = [
            [
                'id' =>1,
                'titulo' => "Bienvenida",
                'imagen' => "/images/normal/bienvenida.png",
                'ponente' =>"Equipo Blendiberia",
                'perfil' => "/images/svg/icono_home.svg",
                'descripcion_reducida' =>"Después de varios años vuelve la Bliendiberia en formato presencial, con un Blender más introducido en la industria audiovisual y cada versión con más usuarios y estudios usando Blender",
                'descripcion' =>"Después de varios años vuelve la Bliendiberia en formato presencial, con un Blender más introducido en la industria audiovisual y cada versión con más usuarios y estudios usando Blender",

            ],
            [
                'id' =>2,
                'titulo' => " Iluminación en Blender: Fundamentos para la Creación de Escenas",
                'imagen' => "/images/normal/alex-trevino-medmain.jpg",
                'ponente' =>"Alex Treviño",
                'perfil' => "/images/ponentes/Alex.png",
                'descripcion_reducida' =>"En esta charla profundizaremos en los fundamentos de la iluminación aplicados en Blender, un aspecto crucial para crear escenas 3D atractivas.",
                'descripcion' => "En esta charla profundizaremos en los fundamentos de la iluminación aplicados en Blender, un aspecto crucial para crear escenas 3D atractivas. Aprende a manipular la calidad de la luz, la temperatura y los diferentes roles de la luz para lograr atmósferas específicas. Esta charla te equipará con las herramientas y conocimientos necesarios para mejorar la técnica de iluminación en Blender."
            ],
            [
                'id' =>3,
                'titulo' => "Blender en el Mundo de la Publicidad",
                'imagen' => "/images/normal/publicidad.webp",
                'ponente' =>"Alex Baeza",
                'perfil' => "/images/svg/icono_home.svg",
                'descripcion_reducida' => "Cada día son más las empresas de Publicidad que también usan Blender para crear espacios publicitarios y experiencias virtuales para sus usuarios.",
                'descripcion' =>"Cada día son más las empresas de Publicidad que también usan Blender para crear espacios publicitarios y experiencias virtuales para sus usuarios. Pasando por nuevos flujos de trabajo, hasta llegar a crear experiencias las cuales cambiarán cómo se mueve el mercado nacional e internacional de los próximos años. Podremos aprender de estas nuevas tendencias y poder aplicarlas a nuestros areas ya que es el principio de estos usos de nuevas tecnologías, todo desde la visión de profesionales del sector."

            ],
            [
                'id' => 4,
                'titulo' => "Blender sobre todo lo demás",
                'imagen' => "/images/normal/publicidad.png",
                'ponente' =>"Irene Arnaiz",
                'perfil' => "/images/ponentes/Irene.png",
                'descripcion_reducida' =>"¿Por qué para vfx me parece que Blender es una gran herramienta?,  voy a mostrar las ventajas que tiene de cara a una producción, con el uso de herramientas nativas, o addons especificos.",
                'descripcion' =>"¿Por qué para vfx me parece que Blender es una gran herramienta?,  voy a mostrar las ventajas que tiene de cara a una producción, con el uso de herramientas nativas, o addons especificos."

            ],
            ];

        return view('principal',compact('conferencias'));
    }
}
