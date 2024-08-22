<x-plantilla-base>
    {{--@dd($ponente); --}}
   <h1>Información de la persona que da la ponencia</h1>
    <div>
        @foreach ( $ponente as $ponent )
            {{$ponent->nombre}}
            {{$ponent->cargo}}
            {{$ponent->cv}}
        @endforeach

    </div>
</x-plantilla-base>
