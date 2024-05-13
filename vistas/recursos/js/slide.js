
/*=============================================
JD SLIDER
=============================================*/
// Inicializa el carrusel con jdSlider
$('.jd-slider').jdSlider({
    isLoop: true,
    speed: 500,
});

// Espera a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {
    // Inicializa el carrusel de Bootstrap y activa el autoplay
    var myCarousel = document.getElementById('carrusel');
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 5000, // Intervalo de 5 segundos (ajusta según sea necesario)
      //pause: 'hover' // Opcional: pausa el autoplay cuando el mouse está sobre el carrusel
    });
});

/*=============================================
Esconder el Slide
=============================================*/

var toggle = false;

$(document).on("click","#btnSlide",function(event){

    event.preventDefault(); // Detiene el comportamiento predeterminado del enlace

    if(!toggle){

        $(".jd-slider").slideUp("fast");
        $("#btnSlide").html('<i class="fa fa-angle-down templateColor"></i>')
        toggle = true;

    }else{

        $(".jd-slider").slideDown("fast");
        $("#btnSlide").html('<i class="fa fa-angle-up templateColor"></i>')
        toggle = false;
    }

})


