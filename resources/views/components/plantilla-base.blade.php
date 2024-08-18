<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1 ,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blendiberia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blendiberia.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">


    <link rel="stylesheet" href="{{ asset('css/talleres.css') }}">
</head>
<body>

    <x-main-menu/>
    {{$slot}}

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
    <script src={{ asset('/javascript/blendiberia.js') }}></script>
    <script src={{ asset('/javascript/dark.js')}}></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    {{--<script src ={{ asset('/javascript/slide.js')}}> --}}
</body>
</html>

