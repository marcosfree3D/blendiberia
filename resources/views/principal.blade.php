<x-plantilla-base>

    <x-cabecera-principal/>
    <x-calendario-localizacion/>
    <x-zona-ponentes :ponentes="$ponentes"/>
    <x-zona-conferencias :conferencias="$conferencias"/>
    <x-zona-talleres :talleres="$talleres"/>

    <x-boton-reserva-naranja/>

    {{--<x-zona-videos/>--}}

</x-plantilla-base>

