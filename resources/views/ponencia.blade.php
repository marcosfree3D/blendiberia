<x-plantilla-base>

   <h1>Ponencia concreta extendida</h1>
    <div>
        @foreach ($ponencia as $ponen )
            {{$ponen->titulo}}
            {{$ponen->imagen}}
            {{$ponen->ponente}}
            {{$ponen->perfil}}
            {{$ponen->descripcion}}
            {{$ponen->fecha}}
            {{$ponen->hora}}
            {{$ponen->sala}}
        @endforeach

    </div>
</x-plantilla-base>
