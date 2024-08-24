<x-plantilla-base>

        @foreach ($taller as $tall )
            <section class="taller__container">
                <div class="taller__imagen--container">
                    <img src={{$tall->imagen}} alt="Imagen ponencia "{{$tall->titulo}} class="taller__imagen">
                </div>
                <div class="taller__perfil--container">
                    <img src={{$tall->perfil_ponente}} alt="" class="taller__perfil--imagen">
                    <div class="taller__perfil--nombre-ponente">
                        {{$tall->ponente}}
                    </div>
                    <div class="taller__perfil--skin-ponente">
                        {{$tall->cargo}}
                    </div>
                </div>
                <div class="taller__resumen--container">
                    <div class="taller__resumen--fecha">
                       FECHA: {{ \Carbon\Carbon::parse($tall->fecha)->format('d/m') }}
                    </div>
                    <div class="taller__resumen--titulo">
                        {{$tall->hora}} {{$tall->titulo}} {{$tall->sala}}
                    </div>
                    <div class="taller__resumen--descripcion">
                        {{$tall->descripcion}}
                    </div>
                </div>
                @if ($tall->precio ==0)
                    <div class="taller__resumen--container-reserva">
                        <div class="taller__resumen--boton-reserva">
                            Reserva aquí tu entrada
                        </div>
                    </div>
                @else
                    <div class="taller__resumen--container-reserva">
                        <div class="taller__resumen--precio-entrada">
                            {{$tall->precio}}€
                        </div>
                        <div class="taller__resumen--boton-reserva">
                            Compra aquí tu entrada
                        </div>
                    </div>
                @endif








            </section>
        @endforeach

</x-plantilla-base>
