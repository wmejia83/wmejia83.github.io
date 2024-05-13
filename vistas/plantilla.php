<?php

/*=============================================
    Iniciar variables de sesion 
    =============================================*/

ob_start();
session_start();

/*=============================================
    Variable ruta
    =============================================*/
$ruta = ControladorPlantilla::ruta();

/*=============================================
    Capturar rutas de la Url
    =============================================*/
$rutasArray = explode("/", $_SERVER["REQUEST_URI"]);


array_shift($rutasArray);

foreach ($rutasArray as $key => $value) {

    $rutasArray[$key] = explode('?', $value)[0];
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Personalizacion y SEO -->
    <title>Fitnesstronik</title>
    <link rel="icon" href="<?php echo $ruta ?>vistas/recursos/img/identidad-corporativa/logo.png">
    <meta name="description" content="Descripción de tu página">
    <meta name="keywords" content="palabra clave1, palabra clave2, palabra clave3">
    <meta name="author" content="Nombre del autor">


    <!-- //? CSS externos -->
    <!-- fontawesome.6.5.2-->
    <link rel="stylesheet" href="<?php echo $ruta ?>vistas/recursos/librerias/fontawesome-free-6.5.2/all.min.css">
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="<?php echo $ruta ?>vistas/recursos/librerias/bootstrap/bootstrap.min.css">
    <!-- JDSlider -->
    <link rel="stylesheet" href="<?php echo $ruta ?>vistas/recursos/plugins/jdSlider/jdSlider.css">



    <!-- //? CSS Propios -->
    <!-- Plantilla -->
    <link rel="stylesheet" href="<?php echo $ruta ?>vistas/recursos/css/plantilla.css">
    <!-- Navbar -->
    <link rel="stylesheet" href="<?php echo $ruta ?>vistas/recursos/css/navbar.css">
    <!-- Slide -->
    <link rel="stylesheet" href="<?php echo $ruta ?>vistas/recursos/css/slide.css">
    <!-- Anexos-->
    <link rel="stylesheet" href="<?php echo $ruta ?>vistas/recursos/css/anexos.css">
    <!-- Productos Inicio-->
    <link rel="stylesheet" href="<?php echo $ruta ?>vistas/recursos/css/productos-inicio.css">
    <!-- Reparación-->
    <link rel="stylesheet" href="<?php echo $ruta ?>vistas/recursos/css/reparacion.css">

</head>

<?php

        /*================================================
        //* Agregar contenido de acuerdo a petición http 
        ================================================*/

        /*================================================
        Si viene parámetro después de la ruta principal                       
        ================================================*/
        if(!empty($rutasArray[0])){

            /*================================================
            Si se inició sesión exitosamente                      
            ================================================*/

            if($rutasArray[0] == "backoffice" && (isset($_SESSION["sesionUsuario"]) && $_SESSION["sesionUsuario"] == "ok")){

            // body
             echo '<body class="hold-transition sidebar-mini layout-fixed">';

                //  wrapper
                echo '<div class="wrapper">';
            
                    include "modulos-globales/navbar-backoffice.php";
                    include "modulos-globales/sidebar.php";
                    

                    include "paginas/backoffice/backoffice.php";

                    include "modulos-globales/footer.php";
                    include "modulos-globales/finanzas-sidebar.php";
                    include "modulos-globales/configuracion-sidebar.php";

            }else{

            /*================================================
            Si NO se inició sesión / Si se cierra cesión                       
            ================================================*/
            // body
            echo '<body class="hold-transition layout-top-nav">';
            
                // wrapper
                echo '<div class="wrapper">';

                if(
                    $rutasArray[0] == "registro" ||
                    $rutasArray[0] == "ingreso" ||
                    $rutasArray[0] == "salir"
                ){

                    include "paginas/autenticacion/".$rutasArray[0].".php";

                }elseif(

                    $rutasArray[0] == "historia" ||

                    $rutasArray[0] == "mision" ||

                    $rutasArray[0] == "reparacion" ||

                    $rutasArray[0] == "catalogo" 
                ){

                    //include "modulos-globales/top.php";
                    include "modulos-globales/navbarNormal.php";
                    include "modulos-globales/navbar.php";
                    include "paginas/".$rutasArray[0]."/".$rutasArray[0].".php";
                    include "modulos-globales/contacto.php";
                    include "modulos-globales/botones.php";
                    include "modulos-globales/footer.php";

                }else{

                    include "paginas/errores/404.php";
                }
            
            }

        }else{
            /*================================================
            Si Solo viene la ruta principal                       
            ================================================*/

            echo '<body class="hold-transition layout-top-nav">';
            
                // wrapper
                echo '<div class="wrapper">';
                include "modulos-globales/navbarNormal.php";
                include "modulos-globales/navbar.php";
                include "paginas/inicio/inicio.php";
                include "modulos-globales/contacto.php";
                include "modulos-globales/botones.php";
                include "modulos-globales/footer.php";

        }
?>


<!--//* ./Contenido Principal -->

</div>
<!-- ./wrapper -->


    <!-- //todo JS externos -->
    <!-- jQuery -->
    <script src="<?php echo $ruta ?>vistas/recursos/plugins/jquery/jquery.min.js"></script> 
    <!-- fontawesome.6.5.2-->
    <script src="<?php echo $ruta ?>vistas/recursos/librerias/fontawesome-free-6.5.2/all.min.js"></script>
    <!-- Bootstrap 5 -->
    <script src="<?php echo $ruta ?>vistas/recursos/librerias/bootstrap/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <!-- <script src="<?php echo $ruta ?>vistas/recursos/librerias/adminlte/adminlte.min.js"></script> -->
    <!-- JDSlider
    https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
    <script src="<?php echo $ruta ?>vistas/recursos/plugins/jdSlider/jdSlider.js"></script>


    <!-- //todo JS propios -->

    <!-- Slide -->
    <script src="<?php echo $ruta ?>vistas/recursos/js/slide.js"></script>
    <!-- Grid-Lista -->
    <script src="<?php echo $ruta ?>vistas/recursos/js/grid-lista.js"></script>

<body>

</body>



</html>