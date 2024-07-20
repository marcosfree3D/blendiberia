   <!--Zona Videos slide-->
   <section class="b-titulos">
    <div class="titulo-texto">VÍDEOS EDICIONES ANTERIORES</div>
    <div class="linea_slide">
        <hr class="linea_naranja">
        <img id="PreviousVideo" src="/images/svg/slide_flecha_izquierda.svg" alt="Slide flecha izquierda" class="boton_slide">
        <img id="NextVideo" src="/images/svg/slide_flecha_derecha.svg" alt="Slide flecha derecha" class="boton_slide">
    </div>
</section>

<!--Zona Videos - detalle videos-->
<section class="b-videos">
    <% videos.forEach(video => { %>
        <div class="video">
            <video src="<%= video.url %>" width="360" height="640"></video>
        </div>
    <% }); %>
</section>
