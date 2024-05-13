   <style>
        /* Estilos para los botones */

        .btn-icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Estilos para la posición fija del botón de volver arriba */
        #back-to-top {
            justify-content: center;
            position: fixed;
            bottom: 120px;
            right: 20px;
            display: none; 
        }
        
        .btn-whatsapp{
            height: 50px;
        }
        .whatsapp-button {
            position: fixed;
            bottom: 60px;
            right: 20px;
        }



    </style>


<!-- Botón para volver arriba -->
<button onclick="topFunction()" class="btn btn-warning btn-icon" id="back-to-top" style="display: none; width:50px; height:50px">
    <i class="fa-solid fa-arrow-up fa-bounce"></i>
</button>

<!-- Botón de WhatsApp -->
<a href="https://wa.me/+573117315040?text=Hola,%20quiero%20tener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20sus%20servicios" target="_blank" rel="noopener noreferrer" class="whatsapp-button">
    <button class="btn btn-success btn-icon btn-whatsapp">
        <i class="fab fa-whatsapp me-2"></i> 
        ¿Cómo puedo ayudarte?
    </button>
</a>





<script>
// Función para volver arriba
function topFunction() {
    document.body.scrollTop = 0; // Para Safari
    document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
}

// Función para mostrar u ocultar el botón de "Volver arriba" según el desplazamiento de la página
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("back-to-top").style.display = "block";
  } else {
    document.getElementById("back-to-top").style.display = "none";
  }
}

</script>


