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
    <% talleres.forEach(taller => { %>
        <div class="taller">
        <img src="<%= taller.imagen %>" alt="imagen taller" class="imagen_taller">
        <h3 class="titulo-taller"><%= taller.titulo %></h3>
        <div class="taller__descripcion"><%= taller.descripcion %></div>
        </div>
    <% }); %>
</section>
