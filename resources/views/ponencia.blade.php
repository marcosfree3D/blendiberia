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
                    {{$pon->hora}} : {{$pon->titulo}}
                </div>

                <div class="ponencia__resumen--sala">
                    SALA: {{$pon->sala}}
                </div>

                <div class="ponencia__resumen--descripcion">
                    {{$pon->descripcion}}
                </div>
            </div>

            @if(!is_null($pon->yt_presentacion))
                <div class="ponentes__video-presentacion">
                    <iframe width="560"
                            height="315"
                            src="https://www.youtube.com/embed/{{ $pon->yt_presentacion }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                </div>
            @endif
        </section>
    @endforeach

</x-plantilla-base>
