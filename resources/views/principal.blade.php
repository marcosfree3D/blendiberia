<x-plantilla-base>

    <x-cabecera-principal/>
    <x-calendario-localizacion/>
    <x-qr/>
    <x-zona-ponentes :ponentes="$ponentes"/>
    <x-zona-talleres :talleres="$talleres"/>
    <x-zona-conferencias :conferencias="$conferencias"/>
    <x-zona-promociones/>
    <x-zona-sponsors/>
    <x-boton-reserva-naranja/>

    {{--<x-zona-videos/>--}}

</x-plantilla-base>
