<x-plantilla-base>
    {{--@dd($ponente); --}}
    <div>
        @foreach ( $ponente as $ponent )

            <img class="ponentes__datosponente--foto-perfil" src={{$ponent->imagen_perfil}} alt="Imagen perfil">
            <h1 class="ponentes__datosponente-nombre">{{$ponent->nombre}} </h1>
            <div class="ponentes__datosponente--cargo">{{$ponent->cargo}}</div>
            <div class="ponentes__datosponente--cv">{{$ponent->cv}}</div>

            @if(!is_null($ponent->yt_presentacion))
                <div class="ponentes__video-presentacion">
                    <iframe width="560"
                            height="315"
                            src="https://www.youtube.com/embed/{{ $ponent->yt_presentacion }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                </div>
            @endif
            <h2 class="ponentes__redes-sociales">Contactar:</h2>
            @if(!is_null($ponent->web ))
                <div class="ponentes_datosponente--contenedor-links">
                    <img class="ponentes_datosponente--logoredsocial" src={{"/images/svg/web.svg"}} alt="icono web">
                    <a href={{$ponent->web}}>{{$ponent->web}}</a>

                </div>
            @endif
            @if(!is_null($ponent->artstation))
                <div class="ponentes_datosponente--contenedor-links">
                    <img class="ponentes_datosponente--logoredsocial" src={{"/images/svg/artstation.svg"}} alt="icono web">
                    <a href={{$ponent->artstation}}>{{$ponent->artstation}}</a>

                </div>

            @endif
            @if(!is_null($ponent->discord ))
                <div class="ponentes_datosponente--contenedor-links">
                    <img class="ponentes_datosponente--logoredsocial" src={{"/images/svg/discord.svg"}} alt="icono web">
                    <a href={{$ponent->discord}}>{{$ponent->discord}}</a>

                </div>
            @endif
            @if(!is_null($ponent->instagram ))
                <div class="ponentes_datosponente--contenedor-links">
                    <img class="ponentes_datosponente--logoredsocial" src={{"/images/svg/instagram.svg"}} alt="icono web">
                    <a href={{$ponent->instagram}}>{{$ponent->instagram}}</a>

                </div>
            @endif
            @if(!is_null($ponent->github ))

                <div class="ponentes_datosponente--contenedor-links">
                    <img class="ponentes_datosponente--logoredsocial" src={{"/images/svg/github.svg"}} alt="icono web">
                    <a href={{$ponent->github}}>{{$ponent->github}}</a>

                </div>
            @endif

            @if(!is_null($ponent->twitter_x ))
            <div class="ponentes_datosponente--contenedor-links">
                <img class="ponentes_datosponente--logoredsocial" src={{"/images/svg/twitter.svg"}} alt="icono web">
                <a href={{$ponent->twitter_x}}>{{$ponent->twitter_x}}</a>

            </div>
            @endif
            @if(!is_null($ponent->facebook ))
                <div class="ponentes_datosponente--contenedor-links">
                    <img class="ponentes_datosponente--logoredsocial" src={{"/images/svg/facebook.svg"}} alt="icono web">
                    <a href={{$ponent->facebook}}>{{$ponent->facebook}}</a>

                </div>
            @endif
            @if(!is_null($ponent->tiktok ))
                <div class="ponentes_datosponente--contenedor-links">
                    <img class="ponentes_datosponente--logoredsocial" src={{"/images/svg/tiktok.svg"}} alt="icono web">
                    <a href={{$ponent->tiktok}}>{{$ponent->tiktok}}</a>

                </div>

            @endif
            @if(!is_null($ponent->youtube ))
                <div class="ponentes_datosponente--contenedor-links">
                    <img class="ponentes_datosponente--logoredsocial" src={{"/images/svg/youtube.svg"}} alt="icono web">
                    <a href={{$ponent->youtube}}>{{$ponent->youtube}}</a>

                </div>
            @endif
            @if(!is_null($ponent->linkedin ))
                <div class="ponentes_datosponente--contenedor-links">
                    <img class="ponentes_datosponente--logoredsocial" src={{"/images/svg/linkedin.svg"}} alt="icono web">
                    <a href={{$ponent->linkedin}}>{{$ponent->linkedin}}</a>

                </div>
            @endif

        @endforeach

    </div>
</x-plantilla-base>
