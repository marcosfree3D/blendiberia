<!--Zona Talleres slide-->
<section class="b-titulos">
    <div class="titulo-texto">TALLERES</div>
    <div class="linea_slide">
        <hr class="linea_naranja">
        <img id="PreviousTaller" src="/images/svg/slide_flecha_izquierda.svg" alt="Slide flecha izquierda" class="boton_slide">
        <img id="NextTaller" src="/images/svg/slide_flecha_derecha.svg" alt="Slide flecha derecha" class="boton_slide">
    </div>
</section>

<!--Zona Talleres - detalle talleres-->
<section class="b-talleres">
    @foreach ($talleres as  $taller)
        <div class="taller">
            <a href="/taller/{{$taller->url}}">
                <img src={{$taller->imagen}} alt="imagen taller" class="imagen_taller">
                <h3 class="titulo-taller">{{$taller->titulo}}</h3>
                <h2 class="conferencias__programa">FECHA: {{ \Carbon\Carbon::parse($taller->fecha)->format('d/m') }}</h2>
                <h2 class="conferencias__programa">HORA: {{$taller->hora}}</h2>
                <h2 class="conferencias__programa"> SALA: {{$taller->sala}} </h2>
                <h2 class="conferencias__programa"> PONENTE: {{$taller->ponente}} </h2>
                <div class="taller__descripcion">{{$taller->descripcion_reducida}}</div>
            </a>
        </div>
    @endforeach
</section>
