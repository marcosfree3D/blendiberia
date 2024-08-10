<x-plantilla-base>
<div class="b-contenedor-eventos">
    <h2 class="texto-programa">PROGRAMA</h2>


    <div class="b-programa-lista">
        <div class="b-contenedor-eventos__calendarios"> <!--contenedor calendarios-->
            <a href="/conferencias/9/1">
                <img src="/images/svg/calendario_9_naranja.svg" alt="imagen calendario día 9">
            </a>
            <a href="/conferencias/10/1">
                <img src="/images/svg/calendario_10_blanco.svg" alt="imagen calendario día 10">
            </a>
        </div>


        <div class="b-programa-lista__contenedor_eventos"> <!--contenedor eventos -->
            <div class="b-programa-lista__contenedor_eventos_horarios">
                <p class="fecha-programa"> <%= dia %> </p>
                <% if (conferencias.length >0) { %>
                    <% conferencias.forEach(conferencia => { %>
                        <a href="/conferencias/<%= conferencia.dia %>/<%= conferencia.id %> " class="b-programa-lista__contenedor_eventos_horarios_row">
                            <p><%= conferencia.hora %></p>
                            <p> <%= conferencia.titulo %> </p>
                            <p> <%= conferencia.tipo %></p>
                            <% if (conferencia.precio>0) { %>
                                <div class="b-programalista__evento__precio">
                                    <%= conferencia.precio %> €
                                </div>
                            <% } %>
                        </a>
                    <% }) %>

                <% } %>
            </div>
            <div class="b-programa-lista__contenedor__detalle">
                <p class="b-programa-lista__contenedor__titulo"><%= titulo %> </p>
                <div class="b-programa-lista__contenedor__detalle__imgtxt">
                    <img src="<%= imagen %>" alt="Imagen de la conferencia" class="b-programa-lista-detalle__imagen">
                    <p class="b-programa-lista__detalle__cuerpo"><%= descripcion %> </p>
                </div>
            </div>
        </div> <!--contenedor precios -->
        <div>

        </div>

    </div>

</div>
</x-plantilla-base>
