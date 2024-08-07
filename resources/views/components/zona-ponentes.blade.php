<!--Zona ponentes slide-->
<div class="b-titulos">
    <div class="titulo-texto">PONENTES</div>
    <div class="linea_slide">
        <hr class="linea_naranja">
        <img src="/images/svg/slide_flecha_izquierda.svg" alt="Slide flecha izquierda" class="ponente_siguiente boton_slide">
        <img src="/images/svg/slide_flecha_derecha.svg" alt="Slide flecha derecha" class="ponente_anterior boton_slide">
    </div>
</div>
<!--Zona ponentes fotos-->
<div class="swiper">
    <section class="b-ponentes swiper-wrapper">

        {{--Aqui ver como cambiar el valor de $ponentes de cara a la paginación.
            tal vez cambiar el valor de Ponentes, o tal vez  si se puede
            los valores del foreach, o el foreach por algun otro for que
            se pueda controlar con variables. Con eso se resolvería la paginación

        --}}

        @foreach ($ponentes as $ponente)

           {{--<a class="swiper-slide" href="/ponente/{{$ponente->url}} --}}
            <div class="swiper-slide">
                <div class="ficha_ponente">
                    <img src={{$ponente->imagen_perfil}} alt="imagen ponente" class="imagen_ponente">
                    <div class="ponentes__nombre">{{$ponente->nombre}}</div>
                    <div class="ponentes__cargo">{{$ponente->cargo}}</div>
                </div>
            </div>
            {{--</a> --}}
        @endforeach

    </section>
</div>
