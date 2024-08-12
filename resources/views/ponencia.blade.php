<x-plantilla-base>

   <h1>Ponencia concreta extendida</h1>
    <div>
        {{$ponencia->titulo}}
        {{$ponencia->imagen}}
        {{$ponencia->ponente}}
        {{$ponencia->perfil}}
        {{$ponencia->descripcion}}
        {{$ponencia->fecha}}
        {{$ponencia->hora}}
        {{$ponencia->sala}}
    </div>
</x-plantilla-base>
