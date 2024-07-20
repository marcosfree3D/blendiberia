<header>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blendiberia.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/talleres.css') }}">
</header>
<x-main-menu/>

<!-- CUERPO -->
<x-cabecera-principal/>
<x-calendario-localizacion/>
<x-zona-ponentes/>
<x-zona-conferencias/>
<x-zona-talleres/>

<x-boton-reserva-naranja/>

<x-zona-videos/>

<!-- PIE DE PAGINA -->
<footer class="b-pie-pagina">
    <div></div>
    <div class="b-imagenlogopie">
        <img class="imagenlogopie" src={{ asset('/images/svg/logo.svg') }} alt="Logo Blendiberia" >
    </div>
    <div>
        <p class="textolegal"> Aviso legal </p>
        <p class="textolegal"> <a href="/politica-privacidad">Politica de privacidad</a> </p>
        <p class="textolegal"> Politica de cookies </p>
    </div>
</footer>
<script src={{ asset('/js/blendiberia.js') }}></script>
<script src={{ asset('/js/dark.js')}}></script>

