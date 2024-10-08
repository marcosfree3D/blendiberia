<!--Zona Conferencias slide-->
<section class="b-titulos">
    <div class="titulo-texto">CONFERENCIAS (Sábado 9 y Domingo 10)</div>
    <div class="linea_slide">
        <hr class="linea_naranja">
</section>

<!--Zona conferencias - detalle conferencias-->
<section class="b-conferencias">

        @foreach ($conferencias as  $conferencia)
            <div class="conferencia">
                <a href="/ponencia/{{$conferencia->url}}">
                    <img src={{$conferencia->imagen}} alt="imagen conferencia" class="imagen_conferencia">
                    <h3 class="titulo-conferencia">{{$conferencia->titulo}}</h3>
                    <h2 class="conferencias__programa">FECHA: {{ \Carbon\Carbon::parse($conferencia->fecha)->format('d/m') }}</h2>
                    <h2 class="conferencias__programa">HORA: {{$conferencia->hora}}</h2>
                    <h2 class="conferencias__programa"> SALA: {{$conferencia->sala}} </h2>
                    <h3 class="conferencias__programa">PONENTE: {{$conferencia->ponente}}</h3>
                    <div class="conferencia__descripcion">{{$conferencia->descripcion_reducida}}</div>
                </a>
            </div>
        @endforeach

</section>
