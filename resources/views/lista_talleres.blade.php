
<div class="b-contenedor-eventos">
    <h2 class="texto-programa">PROGRAMA de TALLERES</h2>
    <P>** LA REALIZACIÓN DE LOS TALLERES ESTÁ VINCULADA A QUE HAYA UN MÍNIMO DE PERSONAS SUSCRITAS PARA QUE SE PUEDAN LLEVAR A CABO
        EL PAGO ES POR ADELANTADO, Y EN EL CASO DE QUE NO SEA POSIBLE SU REALIZACIÓN SE DEVOLVERÁ EL DINERO A LAS PERSONAS QUE HAYAN RESERVADO SU PLAZA **
    </P>


    <div class="b-programa-lista">
        <div class="b-contenedor-eventos__calendarios"> <!--contenedor calendarios-->
            <a href="/conferencias/9/1">
                <img src="/images/svg/calendario_7_naranja.svg" alt="imagen calendario día 7">
            </a>
            <a href="/conferencias/10/1">
                <img src="/images/svg/calendario_8_blanco.svg" alt="imagen calendario día 8">
            </a>
        </div>


        <div class="b-programa-lista__contenedor_eventos"> <!--contenedor eventos -->
            <div class="b-programa-lista__contenedor_eventos_horarios">
                <p class="fecha-programa"> <%= dia %> </p>
                <% if (talleres.length >0) { %>
                    <% talleres.forEach(taller => { %>
                        <a href="/conferencias/<%= taller.dia %>/<%= taller.id %> " class="b-programa-lista__contenedor_eventos_horarios_row">
                            <p><%= taller.hora %></p>
                            <p> <%= taller.titulo %> </p>
                            <p> <%= taller.tipo %></p>
                            <% if (taller.precio>0) { %>
                                <div class="b-programalista__evento__precio">
                                    <%= taller.precio %> €
                                </div>
                            <% } %>
                        </a>
                    <% }) %>

                <% } %>
            </div>
            <div class="b-programa-lista__contenedor__detalle">
                <p class="b-programa-lista__contenedor__titulo"><%= titulo %> </p>
                <div class="b-programa-lista__contenedor__detalle__imgtxt">
                    <img src="<%= imagen %>" alt="Imagen del taller" class="b-programa-lista-detalle__imagen">
                    <p class="b-programa-lista__detalle__cuerpo"><%= descripcion %> </p>
                </div>
            </div>
        </div> <!--contenedor precios -->
        <div>

        </div>

    </div>

</div>
