<x-plantilla-base>
<div class="b-contenedor-eventos">
    <h2 class="texto-programa">PROGRAMA</h2>


    <div class="b-programa-lista">
        <div class="b-contenedor-eventos__calendarios"> <!--contenedor calendarios-->
            <a href="/ponencias/9">
                <img src="/images/svg/calendario_9_naranja.svg" alt="imagen calendario día 9">
            </a>
            <a href="/ponencias/10">
                <img src="/images/svg/calendario_10_blanco.svg" alt="imagen calendario día 10">
            </a>
        </div>


        <div class="b-programa-lista__contenedor_eventos"> <!--contenedor eventos -->
            <div class="b-programa-lista__contenedor_eventos_horarios">
                <p class="fecha-programa">EVENTOS DÍA: {{$dia}} </p>
                @foreach($conferencias as $conferencia)
                    <a href="/ponencias/{{$conferencia->dia}}/{{$conferencia->url}}" class="b-programa-lista__contenedor_eventos_horarios_row">
                        <p>{{$conferencia->hora}}</p>
                        <p> {{$conferencia->titulo}} </p>
                    </a>
                @endforeach
            </div>
            <div class="b-programa-lista__contenedor__detalle">
                @foreach ( $ponencia as $pon )
                    <p class="b-programa-lista__contenedor__titulo"> {{$pon->hora}} {{$pon->titulo}} </p>
                    <p class="b-programa-lista__contenedor__titulo"> SALA: {{$pon->sala}} PONENTE: {{$pon->ponente}} </p>
                    <div class="b-programa-lista__contenedor__detalle__imgtxt">
                        <img src={{$pon->imagen}} alt="Imagen de la conferencia" class="b-programa-lista-detalle__imagen">
                        <p class="b-programa-lista__detalle__cuerpo">{{$pon->descripcion}} </p>
                    </div>
                @endforeach

            </div>
        </div> <!--contenedor precios -->
        <div>

        </div>

    </div>

</div>
<x-boton-reserva-naranja/>
</x-plantilla-base>
