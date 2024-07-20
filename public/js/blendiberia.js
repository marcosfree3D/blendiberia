function dark(){
    

    var bcolor = document.getElementById("mybody");
    alert("BG " + bcolor.style.background);
    bcolor.style.background = " linear-gradient(var(--marron_oscuro), var(--azul_oscuro));";
    console.log("BG:" + bcolor.style.backgroundColor);
    if(bcolor.style.backgroundColor == "linear-gradient(var(--azul_claro), var(--azul_oscuro));"){
        bcolor.style.backgroundColor = " linear-gradient(var(--marron_oscuro), var(--azul_oscuro));";
    } else{
        bcolor.style.backgroundColor = " linear-gradient(var(--azul_claro), var(--azul_oscuro));";
    }

}

function mobileClick(){
    var hamburger = document.getElementById("id_hamburger");
    var pageWidth  = document.documentElement.scrollWidth;
    if(pageWidth <= 921){
        document.getElementById("id_hamburger").style.display="none"
        document.getElementById("id_close").style.display="none"
    }else {

        if (hamburger.style.display === "none") {
            document.getElementById("id_hamburger").style.display = "block";
            document.getElementById("id_close").style.display = "none";
            document.getElementById("id_barramenu").style.display = "flex";

        } else {
            document.getElementById("id_hamburger").style.display = "none";
            document.getElementById("id_close").style.display = "block";
            document.getElementById("id_barramenu").style.display = "none";

        }
    }
    console.log(hamburger);

}


function closeMenuExtended(){
    document.getElementById("id_barramenu").style.display="none";
    console.log("menu cerrado");
}

function InvalidMsgNombre(textbox) { 
  
    if (textbox.value === '') { 
        textbox.setCustomValidity 
              ('Necesitamos tu nombre para el registro'); 
    }  else { 
        textbox.setCustomValidity(''); 
    } 

    return true; 
} 
function InvalidMsgEmail(textbox) { 
  
    if (textbox.value === '') { 
        textbox.setCustomValidity 
              ('La dirección de correo electronico no puede quedar en blanco'); 
    } else if (textbox.validity.typeMismatch) { 
        textbox.setCustomValidity 
              ('por favor, entra una dirección valida de correo electronico'); 
    } else { 
        textbox.setCustomValidity(''); 
    } 

    return true; 
} 

function InvalidMsgPolitica(checkbox) { 
  
    if (checkbox.checked === false) { 
        checkbox.setCustomValidity 
              ('Debes aceptar la politica de privacidad para poder reservar tu plaza en la Blendiberia 2024'); 
    }  else { 
        checkbox.setCustomValidity(false); 
    } 
   return true; 
} 

function adjustFontSize() {
    const container = document.querySelector('.b-header2');
    const text = document.querySelector('.header2__fecha');
    let fontSize = 10; // Tamaño inicial
    text.style.fontSize = fontSize + 'px';

    // Ajustar el tamaño de la fuente hasta que el ancho del texto sea menor o igual al ancho del contenedor
    while (text.scrollWidth < container.clientWidth && fontSize < 100) {
      fontSize++;
      text.style.fontSize = fontSize + 'px';
    }
    // Retroceder un paso para evitar desbordamiento
    text.style.fontSize = (fontSize - 1) + 'px';
  }

  // Ajustar el tamaño de la fuente al cargar la página
  adjustFontSize();

  // Ajustar el tamaño de la fuente cuando la ventana cambia de tamaño
  window.addEventListener('resize', adjustFontSize);


