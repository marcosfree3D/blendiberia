<x-plantilla-base>

   <%- include('partials/barra_navegacion') -%>

    <h1>Ponencia concreta extendida</h1>
    <div>    <%= ponencia.id %>
    <%= ponencia.titulo %>
    <%= ponencia.imagen %>
    <%= ponencia.ponente %>
    <%= ponencia.perfil %>
    <%= ponencia.descripcion %>
    <%= ponencia.fecha %>
    <%= ponencia.hora %>
    <%= ponencia.sala %>    </div>
</x-plantilla-base>
