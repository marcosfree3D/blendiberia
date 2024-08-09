<x-plantilla-base>
    <h1>REGISTRO</h1>
    <p class="cuerpo__textos-formulario">Debido a que hace varios años que no se celebra la Blendiberia presencialmente, es muy difícil cuantificar la asistencia al evento, por lo que os pedimos por favor que rellenéis el formulario,
        el cual nos servirá para buscar auditorios con un aforo adecuado. </p>

    <p class="cuerpo__textos-formulario">Rellenar el formulario <b>NO</b> implica obtener plaza para el evento, <b>NO</b> es una inscripción de asistencia. Es solo a nivel orientativo de la afluencia que podría tener Blendiberia 2024. </p>

    <p class="cuerpo__textos-formulario">Se esta valorando la posibilidad de ofrecer talleres durante dos días,
        <p class="cuerpo__textos-formulario"> <b>jueves 7, y viernes 8 </b></p>
        <p class="cuerpo__textos-formulario"> <b>o  un día, viernes 8 </b> </p>
            <p class="cuerpo__textos-formulario"> <i>**(dependerá de las necesidades de la organización y los profesionales disponibles)</i> </p>
     <h3 class="texto-naranja">FORMULARIO DE INTENCIÓN DE ASISTENCIA A LA BLENDIBERIA 2024</h3>


     <form action="{{route('registro.store')}}" method="post" class="myForm">
        @csrf
        <div class = "myFormGrid">
            <input type="checkbox" name="interes_blendiberia" id="chk_blendiberia" value="si" />
                    <div class="texto_chk">Tengo interés en asistir a la Blendiberia 2024 que se celebrará en Sitges provincia de Barcelona,
                    (o alrededores de Barcelona) los días 9 y 10 de Noviembre 2024 </div>
            <input type="checkbox" name="interes_talleres" id="chk_talleres" value="si" />
                <div class="texto_chk">Tengo interés en asistir a alguno de los talleres que se realizarán en los días 7 y 8 de Noviembre 2024</div>
        </div>
        <div></div>
        <div class ="myFormGrid2">
            <label for="customer_name">Nombre </label>
            <input  class="fields" type="text" name="nombre" id="nombre" oninvalid="InvalidMsgNombre(this);" oninput="InvalidMsgNombre(this)" required="required">
            <label for="email_address">Email </label>
            <input class="fields" type="email" name="email" id="email" oninvalid="InvalidMsgEmail(this);" oninput="InvalidMsgEmail(this)" required="required">
            <label for="comments">Commentarios</label>
            <textarea class="fields" name="comments" id="comments" maxlength="500"></textarea>
            <label for="personas">Cantidad de asistentes que vendrán conmigo</label>
            <input class="fields" type="number" value="1"  name="personas" id="" Numero de asistentes/>

        </div>
        <div></div>
        <div class = "myFormGrid">
            <input type="checkbox" id="chk_politica" value="politicaprivacidad" onchange="InvalidMsgPolitica()" required />
                <div class="texto_chk"> He leído y acepto la <a class="registro__politica_de-privacidad" href="/politica-privacidad/"> política de privacidad </a> de Blendiberia </div>
        </div>

        <div>

        </div>
        <button type="submit" class="boton" id="btn_reservar"> Reservar mi plaza para la Blendiberia 2024</button>

    </form>
    <div class="proteccion-datos">

    </div>
</x-plantilla-base>
