<!--Zona ponentes slide-->
<div class="b-titulos">
    <div class="titulo-texto">PONENTES</div>
    <div class="linea_slide">
        <hr class="linea_naranja">
       <!-- <img src="/images/svg/slide_flecha_izquierda.svg" alt="Slide flecha izquierda" class="ponente_siguiente boton_slide">
        <img src="/images/svg/slide_flecha_derecha.svg" alt="Slide flecha derecha" class="ponente_anterior boton_slide"> -->
    </div>
</div>
<!--Zona ponentes fotos-->
    <section class="b-ponentes ">
        @foreach ($ponentes as $ponente)

           <a href="/ponente/{{$ponente->url}}">
                <div class="ficha_ponente">
                    <img src={{$ponente->imagen_perfil}} alt="imagen ponente" class="imagen_ponente">
                    <div class="ponentes__nombre">{{$ponente->nombre}}</div>
                    <div class="ponentes__cargo">{{$ponente->cargo}}</div>
                </div>
            </a>
        @endforeach

    </section>
</div>
