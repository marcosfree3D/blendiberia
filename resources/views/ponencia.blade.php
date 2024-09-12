<x-plantilla-base>

    @foreach ($ponencia as $pon )
        <section class="ponencia__container">
            <div class="ponencia__imagen--container">
                <img src={{$pon->imagen}} alt="Imagen ponencia "{{$pon->titulo}} class="ponencia__imagen">
            </div>
            <div class="ponencia__perfil--container">
                <img src={{$pon->perfil}} alt="" class="ponencia__perfil--imagen">
                <div class="ponencia__perfil--nombre-ponente">
                    {{$pon->ponente}}
                </div>
                <div class="ponencia__perfil--skin-ponente">
                    {{$pon->cargo}}
                </div>
            </div>
            <div class="ponencia__resumen--container">
                <div class="ponencia__resumen--fecha">
                   FECHA: {{ \Carbon\Carbon::parse($pon->fecha)->format('d/m') }}
                </div>
                <div class="ponencia__resumen--titulo">
                    {{$pon->hora}} {{$pon->titulo}} {{$pon->sala}}
                </div>
                <div class="ponencia__resumen--descripcion">
                    {{$pon->descripcion}}
                </div>
            </div>
            <div class="ponencia__resumen--container-reserva">
                <a href="/registro/"><div class="ponencia__resumen--boton-reserva">
                    Reserva aquí tu entrada
                </div></a>
            </div>
        </section>
    @endforeach

</x-plantilla-base>
